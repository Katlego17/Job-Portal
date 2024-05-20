@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0">{{ $jobs }}</h2>
                        <p class="m-b-0 text-muted">Jobs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                        <i class="anticon anticon-bars"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0">{{ $categories }}</h2>
                        <p class="m-b-0 text-muted">Categories</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                        <i class="anticon anticon-user"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0">{{ $admins }}</h2>
                        <p class="m-b-0 text-muted">Admins</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-purple">
                        <i class="anticon anticon-solution"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0">{{ $applications }}</h2>
                        <p class="m-b-0 text-muted">Applications</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
