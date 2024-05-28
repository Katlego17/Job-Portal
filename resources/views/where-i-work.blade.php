<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Working on Green Buildings</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/fav.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="./assets/img/logo.png" alt="" class="logo-img">
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


    <!-- Page Title -->

    <section class="container-fluid py-5">

        <h1 class="fs-1 py-5 text-center text-white">Where I Work</h1>

    </section>

    <!-- End Page Title -->

    <!-- About Content -->

    <Section>

        <div class="container py-5">
            <div class="row gx-5 align-items-center py-5">

                <div class="col-12 col-lg-6">
                    <img src="/assets/img/Young Woman - WGB.jpg" alt="" class="about-img img-fluid text-center pb-5 rounded-pill">
                </div>

                <div class="col-12 col-lg-6">
                    <p class="fw-6">
                        At Working on Green Building (WOGB), our participants are placed in buildings owned by the
                        Department of Public Works and Infrastructure (DPWI), which are part of the Integrated Renewable
                        Energy and Resource Efficiency programme (IREREP). These buildings are designed for efficient
                        utility consumption, aligning with our commitment to sustainability and environmental
                        conservation. <br><br>

                        The first phase of our program focuses on working in buildings owned by the Department of
                        Correctional Services (DCS) across all nine provinces in the country. This provides participants
                        with a unique opportunity to gain practical experience in a variety of settings while
                        contributing to the greening of government buildings as the programme continues. <br><br>

                        By working in these buildings, participants not only gain valuable skills and experience but
                        also contribute to the larger goal of promoting energy efficiency and sustainability in
                        government facilities.
                    </p>
                </div>


            </div>
        </div>

    </Section>

    <!-- End About Content -->

    <!-- Footer Section -->

    <section class="container-fluid">
        <div class="footernav container py-5">
            <div class="row ms-auto">


                <div class="col-12 col-lg-4">

                </div>

                <div class="col-12 col-lg-4 text-center">
                    <img src="/assets/img/logo-white.png" alt="" class="footer-img img-fluid">
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
