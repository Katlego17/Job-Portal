@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">

                @if (\Session::has('delete'))
                    <div class="alert alert-success">
                        <p>{!! \Session::get('delete') !!}</p>
                    </div>
                @endif

                <h5 class="card-title mb-4 d-inline" style="padding:10px">Job Applications</h5>

                <!-- Filter Select and Download Button -->
                <div class="mb-3">
                    <select id="region-filter" class="form-select" style="width: 200px;">
                        <option value="">Filter by Region</option>
                        @foreach ($regions as $region)
                            <option value="{{ $region }}">{{ $region }}</option>
                        @endforeach
                    </select>
                    <button id="download-selected" class="btn btn-primary ml-2">Download Selected CVs</button>
                </div>

                <table id="applications-table" class="table">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th scope="col">#</th>
                            <th scope="col">CV</th>
                            <th scope="col">Certified ID</th>
                            <th scope="col">Contract</th>
                            <th scope="col">Timesheets</th>
                            <th scope="col">Email</th>
                            <th scope="col">View Job</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Region</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apps as $app)
                        <tr>
                            <td>
                                <input type="checkbox"
                                       class="select-cv"
                                       data-cv="{{ asset('storage/' . $app->cv) }}"
                                       data-username="{{ $app->user->name }}"
                                       data-jobtitle="{{ $app->job_title }}">
                            </td>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                @if($app->cv)
                                    <a class="btn btn-success" href="{{ asset('storage/' . $app->cv) }}" download>Download</a>
                                @else
                                    <span>No CV</span>
                                @endif
                            </td>
                            <td>
                                @if($app->certified_id)
                                    <a class="btn btn-success" href="{{ asset('storage/' . $app->certified_id) }}" download>Download</a>
                                @else
                                    <span>No Certified ID</span>
                                @endif
                            </td>
                            <td>
                                @if($app->employment_contract)
                                    <a class="btn btn-success" href="{{ asset('storage/' . $app->employment_contract) }}" download>Download</a>
                                @else
                                    <span>No Employment Contract</span>
                                @endif
                            </td>
                            <td>
                                @if($app->user->timesheets->count() > 0)
                                    <button class="btn btn-success" onclick="downloadAllTimesheets('{{ $app->id }}')">Download</button>
                                    <script>
                                        function downloadAllTimesheets(appId) {
                                            @foreach($app->user->timesheets as $index => $timesheet)
                                                var a = document.createElement('a');
                                                a.href = "{{ asset('storage/' . $timesheet->file_path) }}";
                                                a.download = "{{ $app->user->name }}-timesheet-{{ $index + 1 }}.pdf";
                                                a.style.display = 'none';
                                                document.body.appendChild(a);
                                                a.click();
                                                document.body.removeChild(a);
                                            @endforeach
                                        }
                                    </script>
                                @else
                                    <span>No Timesheets</span>
                                @endif
                            </td>
                            <td>{{ $app->email }}</td>
                            <td><a class="btn btn-success" href="{{ route('single.job.admin', $app->id) }}">View</a></td>
                            <td>{{ $app->job_title }}</td>
                            <td>{{ $app->company }}</td>
                            <td>{{ $app->job_region }}</td>
                            <td><a href="{{ route('delete.apps', $app->id) }}" class="btn btn-danger text-center">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize DataTable with sorting and pagination
        const table = $('#applications-table').DataTable({
            paging: true,
            ordering: true,
            searching: true
        });

        // Region Filter
        $('#region-filter').on('change', function() {
            const region = $(this).val();
            table.column(10).search(region).draw();  // Assuming region is in column 10
        });

        // Select All
        $('#select-all').on('click', function() {
            $('.select-cv').prop('checked', this.checked);
        });

        // Download Selected CVs
        $('#download-selected').on('click', function() {
            const selectedCvs = [];
            $('.select-cv:checked').each(function() {
                const cvUrl = $(this).data('cv');
                const username = $(this).data('username').replace(/\s+/g, '_'); // Replace spaces with underscores
                const jobTitle = $(this).data('jobtitle').replace(/\s+/g, '_');
                selectedCvs.push({ url: cvUrl, filename: `${username}-${jobTitle}.pdf` });
            });

            if (selectedCvs.length === 0) {
                alert("Please select at least one CV to download.");
                return;
            }

            selectedCvs.forEach((cv, index) => {
                const a = document.createElement('a');
                a.href = cv.url;
                a.download = cv.filename;
                a.style.display = 'none';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            });
        });
    });
</script>
@endpush
