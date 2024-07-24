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

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CV</th>
                            <th scope="col">Certified ID</th>
                            <th scope="col">Contract</th>
                            <th scope="col">Timesheets</th>
                            <th scope="col">Email</th>
                            <th scope="col">View Job</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apps as $app)
                        <tr>
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
                            <td><a class="btn btn-success" href="{{ route('single.job', $app->id) }}">View</a></td>
                            <td>{{ $app->job_title }}</td>
                            <td>{{ $app->company }}</td>
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
