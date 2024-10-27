@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">

                @if (\Session::has('create'))
                    <div class="alert alert-success">
                        <p>{!! \Session::get('create') !!}</p>
                    </div>
                @endif

                @if (\Session::has('delete'))
                    <div class="alert alert-success">
                        <p>{!! \Session::get('delete') !!}</p>
                    </div>
                @endif

                <h5 class="card-title mb-4 d-inline">Jobs</h5>
                <a href="{{ route('create.jobs') }}" class="btn btn-primary mb-4 text-center float-right">Create Jobs</a>

                <!-- Region Filter -->
                <div class="mb-3">
                    <select id="region-filter" class="form-select" style="width: 200px;">
                        <option value="">Filter by Region</option>
                        @foreach ($regions as $region)
                            <option value="{{ $region }}">{{ $region }}</option>
                        @endforeach
                    </select>
                </div>

                <table id="jobs-table" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Company</th>
                            <th scope="col">Job Region</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <th scope="row">{{ $job->id }}</th>
                            <td>{{ $job->job_title }}</td>
                            <td>{{ $job->category }}</td>
                            <td>{{ $job->company }}</td>
                            <td>{{ $job->job_region }}</td>
                            <td><a href="{{ route('delete.jobs', $job->id) }}" class="btn btn-danger text-center">Delete</a></td>
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
        const table = $('#jobs-table').DataTable({
            paging: true,
            ordering: true,
            searching: true
        });

        // Region Filter
        $('#region-filter').on('change', function() {
            const region = $(this).val();
            table.column(4).search(region).draw(); // Assuming job_region is in column 4
        });
    });
</script>
@endpush
