@extends('layouts.app')
@section('head')
<title>Signup</title>

<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/logo/favicon.png">

<!-- page css -->

<!-- Core css -->
<link href="assets/css/app.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="app">
    <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
        <div class="d-flex flex-column justify-content-between w-100">
            <div class="container d-flex h-100">
                <div class="row align-items-center w-100">
                    <div class="col-md-7 col-lg-5 m-h-auto">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between m-b-30">
                                    <img class="img-fluid" alt="" src="assets/images/logo/logo.png">
                                    <h2 class="m-b-0">Sign Up</h2>
                                </div>
                                <form method="POST" action="{{ route('register') }}" >
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Username:</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="email">Email:</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Password:</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password"  @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between p-t-15">
                                            <div class="checkbox">
                                                <input id="checkbox" type="checkbox">
                                                <!--<label for="checkbox"><span>I have read the <a href="">agreement</a></span></label>-->
                                            </div>
                                            <button  type="submit" name="submit" value="Sign Up" class="btn btn-primary">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex p-h-40 justify-content-between">
                <span class="">© 2019 ThemeNate</span>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-dark text-link" href="">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-dark text-link" href="">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Core Vendors JS -->
<script src="assets/js/vendors.min.js"></script>

<!-- page js -->

<!-- Core JS -->
<script src="assets/js/app.min.js"></script>

<section  class="section-hero overlay inner-page bg-image" style="margin-top: -24px; background-image: url({{ asset('assets/images/hero_1.jpg') }});" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">Register</h1>
          <div class="custom-breadcrumbs">
            <a href="/">Home</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>Register</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form style="margin-top: 35px;" method="POST" action="{{ route('register') }}" class="p-4 border rounded">
                @csrf

                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Name</label>
                    <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="row form-group mb-4">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Re-Type Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" name="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                  </div>
                </div>

              </form>

        </div>
    </div>
</div>
@endsection
