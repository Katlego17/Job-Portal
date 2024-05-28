<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Working on Green Buildings</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/fav.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/tutorials/timelines/timeline-6/assets/css/timeline-6.css">
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

        <h1 class="fs-1 py-5 text-center text-white">How I Apply</h1>

    </section>

    <!-- End Page Title -->

    <!-- Journey Content -->

    <Section>

        <div class="container py-5">

            <div class="row">
                <div class="col-12 col-lg-12">
                    <p class="fs-6 py-1 text-center">
                        Applying to the Working on Green Building (WOGB) program is simple. <br> Follow these steps to
                        begin
                        your journey towards a sustainable and rewarding career:
                    </p>
                </div>
            </div>

            <div class="row gx-5 align-items-center">


                <div class="col-12 col-lg-12">

                    <!-- Timeline 6 - Bootstrap Brain Component -->
                    <section class="bsb-timeline-6 py-1 py-md-5 py-xl-8">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-10 col-md-12 col-xl-10 col-xxl-9">

                                    <ul class="timeline">
                                        <li class="timeline-item left">
                                            <div class="timeline-body">
                                                <div class="timeline-content">
                                                    <div class="card border-0">

                                                        <div class="card-body border border-light-subtle">
                                                            <h2 class="card-title mb-3 text-success-emphasis">Step 1</h2>
                                                            <h6 class="card-subtitle text-dark mb-3">Check Your
                                                                Eligibility:
                                                            </h6>
                                                            <p class="card-text mb-2">PEnsure that you meet the
                                                                program’s eligibility criteria. WOGB is aimed at Black
                                                                Youth, including those living with disabilities,
                                                                graduates, and unemployed youth. We prioritize women and
                                                                individuals with a National Senior Certificate or a TVET
                                                                College Engineering qualification (N2/N3).</p>
                                                            <p class="card-text m-0"><small
                                                                    class="text-body-secondary"></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item right">
                                            <div class="timeline-body">
                                                <div class="timeline-content">
                                                    <div class="card border-0">

                                                        <div class="card-body border border-light-subtle">
                                                            <h2 class="card-title mb-3 text-success-emphasis">Step 2</h2>
                                                            <h6 class="card-subtitle text-dark mb-3">Visit
                                                                SAYouth.mobi:</h6>
                                                            <p class="card-text mb-2">Go to SAYouth.mobi, the platform
                                                                through which we source our applicants. Create an
                                                                account or login if you already have one.</p>
                                                            <p class="card-text m-0"><small
                                                                    class="text-body-secondary"></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item left">
                                            <div class="timeline-body">
                                                <div class="timeline-content">
                                                    <div class="card border-0">

                                                        <div class="card-body border border-light-subtle">
                                                            <h2 class="card-title mb-3 text-success-emphasis">Step 3</h2>
                                                            <h6 class="card-subtitle text-dark mb-3">Complete Your
                                                                Profile:</h6>
                                                            <p class="card-text mb-2">Fill out your profile on
                                                                SAYouth.mobi, providing accurate and up-to-date
                                                                information about your qualifications, skills, and
                                                                employment status.</p>
                                                            <p class="card-text m-0"><small
                                                                    class="text-body-secondary"></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item right">
                                            <div class="timeline-body">
                                                <div class="timeline-content">
                                                    <div class="card border-0">

                                                        <div class="card-body border border-light-subtle">
                                                            <h2 class="card-title mb-3 text-success-emphasis">Step 4</h2>
                                                            <h6 class="card-subtitle text-dark mb-3">Search for the
                                                                WOGB Program:</h6>
                                                            <p class="card-text mb-2">Look for the Working for Green
                                                                Building program on SAYouth.mobi. Read through the
                                                                program details and requirements to ensure it aligns
                                                                with your goals.</p>
                                                            <p class="card-text m-0"><small
                                                                    class="text-body-secondary"></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="timeline-item left">
                                            <div class="timeline-body">
                                                <div class="timeline-content">
                                                    <div class="card border-0">

                                                        <div class="card-body border border-light-subtle">
                                                            <h2 class="card-title mb-3 text-success-emphasis">Step 5</h2>
                                                            <h6 class="card-subtitle text-dark mb-3">Apply for the
                                                                Program:</h6>
                                                            <p class="card-text mb-2">Follow the application
                                                                instructions provided on SAYouth.mobi to apply for the
                                                                WOGB program. Be sure to include all required documents
                                                                and information.</p>
                                                            <p class="card-text m-0"><small
                                                                    class="text-body-secondary"></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="timeline-item right">
                                            <div class="timeline-body">
                                                <div class="timeline-content">
                                                    <div class="card border-0">

                                                        <div class="card-body border border-light-subtle">
                                                            <h2 class="card-title mb-3 text-success-emphasis">Step 6</h2>
                                                            <h6 class="card-subtitle text-dark mb-3">Wait for a
                                                                Response:</h6>
                                                            <p class="card-text mb-2">LAfter submitting your
                                                                application, wait for a response from the WOGB team. If
                                                                you are shortlisted, you will be contacted for further
                                                                assessment and interviews.</p>
                                                            <p class="card-text m-0"><small
                                                                    class="text-body-secondary"></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Timeline End -->
                </div>
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
            <a href="/register"><button class="btn btn-success py-2 px-5" style="border-color: #084b39;">Sign Up</button></a>
            <a href="/about-us"><button class="btn btn-secondary py-2 px-5">Learn More</button></a>
        </div>

    </div>
</section>

<!-- End CTA -->

            </div>
        </div>

    </Section>

    <!-- End Journey Content -->

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
