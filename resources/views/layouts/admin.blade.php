<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    <!-- Page CSS -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

    <!-- Additional Styles -->
    @stack('styles')
</head>
<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="{{ route('admins.dashboard') }}">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
                        <img class="logo-fold" src="{{ asset('assets/images/logo/logo-fold.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="{{ route('admins.dashboard') }}">
                        <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Logo">
                        <img class="logo-fold" src="{{ asset('assets/images/logo/logo-fold-white.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        @auth('admin')
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="{{ asset('assets/images/avatars/thumb-3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="{{ asset('assets/images/avatars/thumb-3.jpg') }}" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::guard('admin')->user()->name }}</p>
                                            <p class="m-b-0 opacity-07">Administrator</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <!--<div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>-->
                                </a>
                                <a href="{{ route('logout') }}" class="dropdown-item d-block p-h-15 p-v-10"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('view.login') }}" style="color:white">Login
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    @guest
                            @else
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown open">


                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('admins.dashboard') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('view.admins') }}">Admins</a>
                                </li>
                                <li>
                                    <a href="{{ route('display.categories') }}">Categories</a>
                                </li>
                                <li>
                                    <a href="{{ route('display.jobs') }}">Jobs</a>
                                </li>
                                <li>
                                    <a href="{{ route('display.apps') }}">Applications</a>
                                </li>
                            </ul>


                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                               class="dropdown-toggle"
                               onclick="event.preventDefault(); document.getElementById('logout-form-side').submit();">
                                <span class="icon-holder">
                                    <i class="anticon anticon-unlock"></i>
                                </span>
                                <span class="title">Logout</span>
                            </a>
                            <form id="logout-form-side" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                         @endguest
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid py-5">
                        @yield('content')
                    </div>
                </div>
                <!-- Content Wrapper END -->
            </div>
            <!-- Page Container END -->
        </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>

    <!-- Core JS -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
