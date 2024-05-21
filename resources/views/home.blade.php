@guest
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Working on Green Buildings</title>
    <link rel="icon" type="image/x-icon" href="/Assets/img/fav.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./Assets/img/logo.png" alt="" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/my-journey">My Journey</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/where-i-work">Where I Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/how-i-apply">How I Apply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">login</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar-->

    <!-- Hero Section -->
    <section>
        <div class="container-fluid ">
            <div class="container py-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-6">
                        <h1 class="fs-1 fw-semibold pb-3" style="color: white;">Welcome to Working <br>on Green
                            Buildings <br>(WOGB)</h1>

                        <p class="fs-6 lead pb-3" style="color: white;">WOGB (Working on Green Buildings) is a Programme
                            within the iREREP (Integrated Renewable
                            Resource
                            Efficiency Programme) Economic Development framework which seeks to improve the economic
                            wellbeing, quality of life of South African citizens and promote economic growth for
                            communities
                            and South Africa at large. The Programme aims to achieve this through the creation and
                            retention
                            of jobs, enhancement of economic growth, improvement of existing businesses as well as the
                            encouragement and attraction of new businesses.</p>

                        <a href="about-us.html" <button class="btn btn-primary py-3 px-5 d-inline-block">Learn
                            More</button></a>

                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="./Assets/img/WOGB - Circular Digital Banner.png" class="img-fluid py-6" alt="...">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- End Hero Section -->

    <!-- Vision Section -->
    <section class="container-fluid" style="background-color: #2f6439;">
        <div class="container py-5 px-5 align-items-center justify-content-center">

            <div class="row">

                <div class="col-12 col-lg-6">

                    <h1 class="fs-1 fw-semibold" style="color: white;">Our Vison</h1>

                </div>

                <div class="col-12 col-lg-6">

                    <p class="fs-6" style="color: white;">We envision a future where young people have access to job
                        opportunities and relevant
                        industry skills training, leading to employment opportunities. Our goal is to see young people
                        gainful employed 1.5 years after completing our program, equipped with the skills and knowledge
                        needed to succeed in the workforce.</p>

                </div>

            </div>

        </div>
    </section>
    <!-- End Vision Section -->

    <!-- Core Values -->

    <section class="container py-5">

        <div class="row gx-5">
            <col-12 class="col-lg-12 text-center">
                <h1 class="fs-1 fw-semibold pt-4" style="color: #084b39;">Core Values</h1>
            </col-12>
        </div>

        <div class="row py-5 g-5">

            <div class="col-12 col-lg-4 d-inline-flex">
                <img src="/Assets/img/Icons/WOGB Icons18.png" alt="" class="value-icons px-3 pb-3">
                <p>Foundational Skills Training: We offer foundational skills training to build a strong
                    knowledge base for
                    our participants.</p>
            </div>
            <div class="col-12 col-lg-4 d-inline-flex">
                <img src="/Assets/img/Icons/WOGB Icons17.png" alt="" class="value-icons px-3 pb-3">
                <p class="fw-6">Skills Training Specific to IREREP Learning Areas: Our program includes skills training
                    specific to green building roles within the IREREP framework, preparing participants for careers in
                    sustainable construction.</p>
            </div>
            <div class="col-12 col-lg-4 d-inline-flex">
                <img src="/Assets/img/Icons/WOGB Icons22.png" alt="" class="value-icons px-3 pb-3">
                <p class="fw-6">
                    Work Readiness Training: We provide work readiness training to develop professional skills and
                    emotional resilience, ensuring that our participants are ready for the workplace.
                </p>
            </div>
        </div>

        <div class="text-center pb-4">
            <a href="about-us.html"><button class="btn btn-secondary py-2 px-5">Read More</button></a>
        </div>
    </section>

    <!-- End Core Values -->

    <!-- Transformation Section -->
    <section class="Transformation container-fluid  d-inline-flex">

        <div class="container py-5">
            <div class="row align-items-center gx-5">
                <div class="col-12 col-lg-6">
                    <img src="/Assets/img/trans.jpg" alt="Transformation" class="transformation-img img-fluid py-5">
                </div>

                <div class="col-12 col-lg-6">
                    <h1 class="fs-2 pb-3" style="color: white;">TRANSFORMATION OUTCOMES</h1>
                    <p class="fw-6" style="color: white;">Through these, the DPWI has identified Transformation outcomes
                        to be achieved through the development, procurement and implementation of the iREREP. <br><br>

                        <strong>Over R250 billion</strong> contribution to South Africa’s GDP. <br><br>

                        <strong>3800 new small businesses</strong> will be developed majority being black-owned.
                        <br><br>

                        <strong>10672</strong> green jobs will be created in the first 5 years; <br><br><strong>324
                            600</strong> green jobs over the 30 year
                        Programme life.

                        <strong>Upskilling of 117 000 people</strong> is expected over 30 years.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- End Transformation -->

    <!-- CTA -->

    <section class="container py-5">

        <div class="row">
            <div class="col-12 col-lg-12">
                <h1 class="fs-1 text-center pt-5
                " style="color: #084b39;">Join Us</h1>
            </div>

            <div class="col-12 col-lg-12">
                <p class="fs-6 text-center py-3">Join WOGB today and embark on a journey towards a sustainable future.
                    <br>Together, we
                    can empower young people and build a greener, more sustainable world.
                </p>
            </div>

            <div class="col-12 col-lg-12 text-center pb-5">
                <a href="{{ route('register') }}"> <button class="btn btn-success py-2 px-5" style="border-color: #084b39;">Sign
                        Up</button></a>
                <a href="how-i-apply.html"><button class="btn btn-secondary py-2 px-5">Learn More</button></a>
            </div>

        </div>
    </section>

    <!-- End CTA -->

    <!-- Footer Section -->

    <section class="container-fluid">
        <div class="footernav container py-5">
            <div class="row ms-auto">


                <div class="col-12 col-lg-4 text-center">

                </div>

                <div class="col-12 col-lg-4 text-center">
                    <img src="/Assets/img/logo-white.png" alt="" class="footer-img img-fluid">
                </div>
                <div class="col-12 col-lg-4">

                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid py-2">
        <div class="container text-center border-top">
            <p class="pt-4" style="font-size: 12px; color: white;"> Working On Green Buildings © All rights reserved.
            </p>
        </div>
    </section>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
@else
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Opportunities</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">

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
                                            <span class="m-l-10">Update CV</span>
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
            <div class="page-container ">



                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid p-t-50 p-b-100" style="background-color: #084b39;">
                        <h1 class="text-center m-b-50 m-t-50" style="color: white;">The Easiest Way To Get Your Dream
                            Job</h1>
                            <form method="post" action="{{ route('search.job') }}" >
                                @csrf
                            <div class="row align-items-center">

                            <div class="col-12 col-sm-3 p-b-15" style="display: flex;">
                                <input class="form-control form-control-lg" name="job_title"  type="text" placeholder="Job Title">
                            </div>
                            <div class="col-12 col-sm-3  p-b-15" style="display: flex;">
                                <!-- Single select boxes -->
                                <h6 class="text-light">Select Region</h6>
                                <select name="job_region" data-live-search="true"  class="form-control">
                                    <option>Anywhere</option>
                                    <option value="AP">Gauteng</option>
                                    <option>Mpumalanga</option>
                                    <option>Limpopo</option>
                                    <option>North West</option>
                                    <option>Kwa-Zulu Natal</option>
                                    <option>Western Cape</option>
                                    <option>Eastern Cape</option>
                                    <option>Northern Cape</option>
                                </select>

                            </div>
                            <div class="col-12 col-sm-3  p-b-15" style="display: flex;">
                                <!-- Single select boxes -->
                                <h6 class="text-light">Select Type</h6>
                                <select name="job_type" class="form-control" data-live-search="true" title="Select Job Type">
                                    <option>Full Time</option>
                                    <option>Part Time</option>

                                </select>
                            </div>
                            <div class="col-12 col-sm-3 p-b-15">
                                <button  name="submit" type="submit" class="btn btn-default btn-block">Search Jobs</button>
                            </div>
                        </form>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-8 p-v-60">

                                <h3>{{ $totalJobs }} Jobs Listed</h3>

                            </div>

                        </div>
                        <div class="row">
                            @foreach ($jobs as $job)
                                <div class="col-sm">
                                    <a href="{{ route('single.job', $job->id) }}">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4>{{ $job->job_title }}ttt</h4>
                                                <h6> {{ $job->job_region }}</h6>
                                                <p></p>
                                                <p><strong>{{ $job->company }}</strong></p>

                                            </div>
                                            <div class="card-footer">
                                                <!--<div class="text-right">
                                                    <button class="btn btn-default m-r-5">Save Job</button>
                                                    <button class="btn btn-primary">Apply</button>
                                                </div>-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content justify-content-between">
                        <p class="m-b-0">Copyright © All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Files</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-cyan avatar-icon">
                                        <i class="anticon anticon-file-excel"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);"
                                            class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                                        <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-blue avatar-icon">
                                        <i class="anticon anticon-file-word"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);"
                                            class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                        <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-purple avatar-icon">
                                        <i class="anticon anticon-file-text"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);"
                                            class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                        <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-red avatar-icon">
                                        <i class="anticon anticon-file-pdf"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);"
                                            class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                                        <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Members</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin
                                            Gonzales</a>
                                        <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);"
                                            class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                        <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);"
                                            class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                                        <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">News</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/img-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5
                                            Best Handwriting Fonts</a>
                                        <p class="m-b-0 text-muted font-size-13">
                                            <i class="anticon anticon-clock-circle"></i>
                                            <span class="m-l-5">25 Nov 2018</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End-->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Theme Config</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="m-b-30">
                                <h5 class="m-b-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex m-t-10">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked
                                            value="default">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="primary">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="success">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                                        <label for="header-secondary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="danger">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                    <label for="side-nav-theme-toogle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick View END -->
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
@endguest
