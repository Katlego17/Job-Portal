<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Working On Green Buildings</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="/home">
                        <img src="assets/images/logo/logo.png" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold.png" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="assets/images/logo/logo-white.png" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold-white.png" alt="Logo">
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
                        <li>
                            <!--<a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>-->
                        </li>
                    </ul>
                    <ul class="nav-right">

                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::user()->name }}</p>
                                            <p class="m-b-0 opacity-07">{{ Auth::user()->job_title }}</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('profile') }}" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="{{ route('edit.details') }}" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                            <span class="m-l-10">Update Details</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="{{ route('edit.cv') }}" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                                            <span class="m-l-10">Upload Documents</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
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
                                    <a href="/home">Opportunities</a>
                                </li>
                                <li>
                                    <a href="{{ route('applications') }}">Applications</a>
                                </li>
                                <li>
                                    <a href="{{ route('saved.jobs') }}">Saved Jobs</a>
                                </li>

                            </ul>
                        </li>
                        <!--<li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{ route('logout') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-unlock"></i>
                                </span>
                                <span class="title">Logout</span>
                                <span class="arrow">

                                </span>
                            </a>

                        </li>-->




                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <div class="container">
                    @if (\Session::has('save'))
                      <div class="alert alert-success">
                              <p>{!! \Session::get('save') !!}</p>
                      </div>
                    @endif
                  </div>

                  <div class="container">
                    @if (\Session::has('apply'))
                      <div class="alert alert-success">
                              <p>{!! \Session::get('apply') !!}</p>
                      </div>
                    @endif
                  </div>

                  <div class="container">
                    @if (\Session::has('applied'))
                      <div class="alert alert-success">
                              <p>{!! \Session::get('applied') !!}</p>
                      </div>
                    @endif
                  </div>

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Applications</h2>

                    </div>
                    <div class="container">
                        <section class="site-section">
                            <div class="container">
                              <div class="row align-items-center mb-5">
                                <div class="col-lg-8 mb-4 mb-lg-0">
                                  <div class="d-flex align-items-center">
                                    <!--<div class="border p-2 d-inline-block mr-3 rounded">
                                      <img  src="{{ asset('assets/images/'.$job->image.'') }}" alt="Image">
                                    </div>-->
                                    <div>
                                      <h2>{{ $job->job_title }}</h2>
                                      <div>
                                        <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{ $job->company }}</span>
                                        <span class="m-2"><span class="icon-room mr-2"></span>{{ $job->job_region }}</span>
                                        <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{ $job->job_type }}</span></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              <div class="row">
                                <div class="col-lg-8">
                                  <div class="mb-5">
                                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
                                    <p>
                                        {{ $job->jobdescription }}
                                    </p>

                                  </div>
                                  <div class="mb-5">
                                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
                                    <p> {{ $job->jobdescription }}   </p>
                                  </div>

                                  <div class="mb-5">
                                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
                                    <p> {{ $job->education_experience }}   </p>
                                  </div>

                                  <div class="mb-5">
                                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
                                    <p> {{ $job->otherbenifits }}   </p>
                                  </div>

                                  <div class="row mb-5">
                                    <div class="col-6">
                                      @if(isset(Auth::user()->id))
                                      <form action="{{ route('save.job') }}" method="POST">
                                        @csrf
                                        <input name="job_id" type="hidden" value="{{ $job->id }}">
                                        <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                                        <input name="job_image" type="hidden" value="{{ $job->image }}">
                                        <input name="job_title" type="hidden" value="{{ $job->job_title }}">
                                        <input name="job_region" type="hidden" value="{{ $job->job_region }}">
                                        <input name="job_type" type="hidden" value="{{ $job->job_type }}">
                                        <input name="company" type="hidden" value="{{ $job->company }}">
                                        @if ($savedJob > 0)
                                          <button class="btn btn-block btn-success btn-md" disabled>you saved this job</button>

                                        @else
                                          <button name="submit" type="submit" class="">Save Job</button>

                                        @endif
                                      <!--add text-danger to it to make it read-->
                                      </form>
                                      @endif
                                    </div>
                                    <div class="col-6">

                                      <form action="{{ route('apply.job') }}" method="POST">
                                        @csrf
                                        <input name="job_id" type="hidden" value="{{ $job->id }}">
                                        <input name="job_image" type="hidden" value="{{ $job->image }}">
                                        <input name="job_title" type="hidden" value="{{ $job->job_title }}">
                                        <input name="job_region" type="hidden" value="{{ $job->job_region }}">
                                        <input name="job_type" type="hidden" value="{{ $job->job_type }}">
                                        <input name="company" type="hidden" value="{{ $job->company }}">
                                        @if(isset(Auth::user()->id))

                                          @if ($appliedJob > 0)
                                          <button class="btn btn-block btn-primary btn-md" disabled>You applied for this job</button>

                                          @else
                                          <button type="submit" name="submit" class="btn btn-block btn-primary btn-md">Apply Now</button>

                                          @endif
                                        @else
                                          <a href="{{ route('login') }}" class="btn btn-block btn-primary btn-md">Login to apply for this job</a>
                                        @endif
                                      </form>
                                    </div>
                                  </div>

                                </div>
                                <div class="col-lg-4">
                                  <div class="bg-light p-3 border rounded mb-4">
                                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                                    <ul class="list-unstyled pl-3 mb-0">
                                      <li class="mb-2"><strong class="text-black">Published on:</strong> {{ $job->created_at }}</li>
                                      <li class="mb-2"><strong class="text-black">Vacancy:</strong> {{ $job->vacancy }}</li>
                                      <li class="mb-2"><strong class="text-black">Employment Status:</strong>{{ $job->job_type }}</li>
                                      <li class="mb-2"><strong class="text-black">Experience:</strong> {{ $job->experience }}</li>
                                      <li class="mb-2"><strong class="text-black">Job Location:</strong> {{ $job->job_region }}</li>
                                      <li class="mb-2"><strong class="text-black">Salary:</strong> {{ $job->salary }}</li>
                                      <li class="mb-2"><strong class="text-black">Gender:</strong> {{ $job->Gender }}</li>
                                      <li class="mb-2"><strong class="text-black">Application Deadline:</strong> {{ $job->application_deadline }}</li>
                                    </ul>
                                  </div>

                                  <!--<div class="bg-light p-3 border rounded">
                                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                                    <div class="px-3">
                                      <a  href="https://www.facebook.com/sharer/sharer.php?u={{ route('single.job', $job->id) }}&quote={{ $job->job_title }}" class="pt-3 pb-3 pr-3 pl-0 text-decoration-none"><span class="icon-facebook"></span></a>
                                      <a  href="https://twitter.com/intent/tweet?text={{ $job->job_title }}&url={{ route('single.job', $job->id) }}" class="pt-3 pb-3 pr-3 pl-0 text-decoration-none"><span class="icon-twitter"></span></a>
                                      <a  href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('single.job', $job->id) }}" class="pt-3 pb-3 pr-3 pl-0 text-decoration-none" ><span class="icon-linkedin"></span></a>
                                    </div>
                                  </div>-->

                                  <div class="bg-light p-3 border mt-5 rounded mb-4">
                                    <h3 class="text-primary h5 pl-3 mb-3 ">Categories</h3>
                                    <ul class="list-unstyled pl-3 mb-0">
                                      @foreach ($categories as $category)
                                        <li class="mb-2"><a class="text-decoration-none" href="{{ route('categories.single', $category->name) }}"> <p>{{ $category->name }} ({{  $category->total  }})</p></a></li>

                                      @endforeach

                                    </ul>
                                  </div>


                                </div>
                              </div>
                            </div>
                          </section>

                          <section class="site-section" id="next">
                            <div class="container">

                              <div class="row mb-5 justify-content-center">
                                <div class="col-md-7 text-center">
                                  <h2 class="section-title mb-2">{{ $relatedJobsCount }} Related Jobs</h2>
                                </div>
                              </div>

                              <ul class="job-listings mb-5">

                                @foreach ($relatedJobs as $job)
                                                                    <a href="{{ route('single.job', $job->id) }}">
<li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                                    <div class="job-listing-logo">
                                      <!--<img src="{{ asset('assets/images/'.$job->image.'') }}" alt="Image" class="img-fluid">-->
                                    </div>

                                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                        <h2>{{ $job->job_title }}</h2>
                                        <strong>{{ $job->company }}</strong>
                                      </div>
                                      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                        <span class="icon-room"></span> {{ $job->job_region }}
                                      </div>
                                      <div class="job-listing-meta">
                                        <span class="badge badge-danger">{{ $job->job_type }}</span>
                                      </div>
                                    </div>

                                  </li></a>
                                @endforeach






                              </ul>



                            </div>
                          </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/js/pages/dashboard-default.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>
    <!-- page js -->
    <script src="assets/vendors/select2/select2.min.js"></script>
</body>
</html>
