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

        <h1 class="fs-1 py-5 text-center text-white">My Journey</h1>

    </section>

    <!-- End Page Title -->

    <!-- Journey Content -->

    <Section>

        <div class="container py-5">

            <div class="row">
                <div class="col-12 col-lg-12">
                    <p class="fs-6 py-5 text-center">
                        Your journey with Working on Green Building (WOGB) is tailored to where you are in your
                        development journey, with pathways designed based on your highest qualification.Your journey
                        with Working on Green Building (WOGB) is tailored to where you are in your development journey,
                        with pathways designed based on your highest qualification.
                    </p>
                </div>
            </div>

            <div class="row gx-5 align-items-center py-5">


                <div class="col-12 col-lg-6">
                    <h2 class="fs-4">1. National Senior Certificate:</h2>
                    <p class="fs-6">
                        If you have recently completed your National Senior Certificate (matric), you will embark on a
                        rigorous 3-year artisan skills program, focusing on plumbing and electrical apprenticeship. The
                        program includes: <br><br>

                        Campus-Based Learning: You will undergo campus-based learning every year for 2 to 3 months,
                        enhancing your theoretical knowledge and understanding of the trade.
                        Employer-Based Learning: You will participate in employer-based learning every year for 9
                        months, gaining practical experience in a real-world work environment.
                        Employers typically offer stipends between R5000 and R8000 per month, although this is not
                        guaranteed. <br>
                    </p>
                    <h2 class="fs-4">2. TVET College Engineering Graduates (N2/N3):</h2>
                    <p class="fs-6">

                        training qualification (N2/N3), you will join a 1-year skills program focused on a specific
                        green building in your area. The program includes:

                        Short Skills Training and Work Readiness: You will receive training in preparation for work,
                        including occupational health and safety, hand and power tools and equipment, and role-specific
                        learning areas.
                        Work Readiness: You will undergo training in personal mastery, work socialization, applied
                        problem-solving, and work etiquette, ensuring you are prepared for the workplace.. <br>
                    </p>
                </div>

                <div class="col-12 col-lg-6">
                    <img src="/assets/img/Training.jpg" alt="" class="about-img img-fluid text-center pb-5">
                </div>

            </div>
        </div>

    </Section>

    <!-- End Journey Content -->

   <!-- Footer Section -->

    <section class="container-fluid" style="background-color: white;">
        <div class="footernav container py-5">
            <div class="row ms-auto">


                <div class="col-12 col-lg-4 text-center pb-4">
                    <img src="/Assets/img/logo.png" alt="" class="footer-img img-fluid">
                </div>

                <div class="col-12 col-lg-4 text-center pb-4">
                    <img src="/Assets/img/irerep_logo.png" alt="" class="footer-img img-fluid">
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="/Assets/img//epwp_ logo.png" alt="" class="footer-img img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid py-2">
        <div class="container text-center">
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
