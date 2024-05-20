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
@extends('layouts.app')

@section('content')



<!-- HOME -->
<section class="home-section section-hero overlay bg-image" style=" margin-top: -24px; background-image: url('{{ asset('assets/images/hero_1.jpg') }}');" id="home-section">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
          <div class="mb-5 text-center">
            <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>
          </div>
          <form method="post" action="{{ route('search.job') }}" class="search-jobs-form">
            @csrf
            <div class="row mb-5">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <input name="job_title" type="text" class="form-control form-control-lg" placeholder="Job title">
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <select name="job_region" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                    <option>Anywhere</option>
                    <option>Gauteng</option>
                    <option>Western Cape</option>
                    <option>KwaZulu-Natal</option>
                    <option>Eastern Cape</option>
                    <option>Free State</option>
                    <option>Limpopo</option>
                    <option>Mpumalanga</option>
                    <option>Northern Cape</option>
                    <option>North West</option>
                </select>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <select name="job_type" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option>Part Time</option>
                  <option>Full Time</option>
                </select>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0"style="color: #084b39">
                <button name="submit" type="submit" class="btn btn-success btn-lg btn-block text-white btn-search" ><span class="icon-search icon mr-2"></span>Search Job</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 popular-keywords">
                <h3>Trending Keywords:</h3>
                <ul class="keywords list-unstyled m-0 p-0">
                  @foreach ($duplicates as $duplicate)
                   <li><a href="#" class="">{{ $duplicate->keyword }}</a></li>

                  @endforeach

                </ul>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <a href="#next" class="scroll-button smoothscroll">
      <span class=" icon-keyboard_arrow_down"></span>
    </a>

  </section>

  <!--<section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
          <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
        </div>
      </div>
      <div class="row pb-0 block__19738 section-counter">

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="1930">0</strong>
          </div>
          <span class="caption">Candidates</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="54">0</strong>
          </div>
          <span class="caption">Jobs Posted</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="120">0</strong>
          </div>
          <span class="caption">Jobs Filled</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="550">0</strong>
          </div>
          <span class="caption">Companies</span>
        </div>


      </div>
    </div>
  </section>-->



  <section class="site-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2">{{ $totalJobs }} Jobs Listed</h2>
        </div>
      </div>

      <ul class="job-listings mb-5">

        @foreach ($jobs as $job)
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="{{ route('single.job', $job->id) }}"></a>
            <div class="job-listing-logo">
              <img src="{{ asset('assets/images/'.$job->image.'') }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
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

          </li>
        @endforeach






      </ul>



    </div>
  </section>

  <!--<section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h2 class="text-white">Looking For A Job?</h2>
          <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
        </div>
        <div class="col-md-3 ml-auto">
          <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
        </div>
      </div>
    </div>
  </section>-->


  <!--<section class="site-section py-4">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-12 text-center mt-4 mb-5">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h2 class="section-title mb-2">Company We've Helped</h2>
              <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
            </div>
          </div>

        </div>
        <div class="col-6 col-lg-3 col-md-6 text-center">
          <img src="{{ asset('assets/images/logo_mailchimp.svg') }}" alt="Image" class="img-fluid logo-1">
        </div>
        <div class="col-6 col-lg-3 col-md-6 text-center">
          <img src="{{ asset('assets/images/logo_paypal.svg') }}" alt="Image" class="img-fluid logo-2">
        </div>
        <div class="col-6 col-lg-3 col-md-6 text-center">
          <img src="{{ asset('assets/images/logo_stripe.svg') }}" alt="Image" class="img-fluid logo-3">
        </div>
        <div class="col-6 col-lg-3 col-md-6 text-center">
          <img src="{{ asset('assets/images/logo_visa.svg') }}" alt="Image" class="img-fluid logo-4">
        </div>

        <div class="col-6 col-lg-3 col-md-6 text-center">
          <img src="{{ asset('assets/images/logo_apple.svg') }}" alt="Image" class="img-fluid logo-5">
        </div>
        <div class="col-6 col-lg-3 col-md-6 text-center">
          <img src="{{ asset('assets/images/logo_tinder.svg') }}" alt="Image" class="img-fluid logo-6">
        </div>
        <div class="col-6 col-lg-3 col-md-6 text-center">
          <img src="{{ asset('assets/images/logo_sony.svg') }}" alt="Image" class="img-fluid logo-7">
        </div>
        <div class="col-6 col-lg-3 col-md-6 text-center">
          <img src="{{ asset('assets/images/logo_airbnb.svg') }}" alt="Image" class="img-fluid logo-8">
        </div>
      </div>
    </div>
  </section>


  <section class="bg-light pt-5 testimony-full">

      <div class="owl-carousel single-carousel">


        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center text-center text-lg-left">
              <blockquote>
                <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
              </blockquote>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-right">
              <img src="{{ asset('assets/images/person_transparent_2.png') }}" alt="Image" class="img-fluid mb-0">
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center text-center text-lg-left">
              <blockquote>
                <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                <p><cite> &mdash; Chris Peters, @Google</cite></p>
              </blockquote>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-right">
              <img src="{{ asset('assets/images/person_transparent.png') }}" alt="Image" class="img-fluid mb-0">
            </div>
          </div>
        </div>

    </div>

  </section>

  <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg'); margin-bottom: -24px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
          <h2 class="text-white">Increase your chances</h2>
          <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
        </div>
        <div class="col-md-6 ml-auto align-self-end">
          <img src="{{ asset('assets/images/apps.png') }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
        </div>
      </div>
    </div>
  </section>-->

@endsection
@endguest
