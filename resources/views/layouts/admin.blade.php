<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg " style="background-color: #084b39;z-index:1">
      <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/WOGB_Logo_white.png') }}" alt="Image" style="width: 100%;height:35px" class="img-fluid img-shadow"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        @auth('admin')

          <ul class="navbar-nav side-nav" style="background-color: #2f6439; z-index:0">
            <li class="nav-item">
              <a class="nav-link text-white" style="margin-left: 20px;padding-top:35px" href="{{ route('admins.dashboard') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('view.admins') }}" style="margin-left: 20px; color:white">Admins</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('display.categories') }}" style="margin-left: 20px; color:white">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('display.jobs') }}" style="margin-left: 20px; color:white">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('display.apps') }}" style="margin-left: 20px; color:white">Applications</a>
            </li>
          </ul>
        @endauth
        <ul class="navbar-nav ml-md-auto d-md-flex">
          @auth('admin')
            <!--<li class="nav-item">
              <a class="nav-link" href="{{ route('admins.dashboard') }}" style=" color:white">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>-->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" color:white">
                {{ Auth::guard('admin')->user()->name }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>

            </li>
          @else

            <li class="nav-item">
              <a class="nav-link" href="{{ route('view.login') }}">login
                <span class="sr-only">(current)</span>
              </a>
            </li>
          @endauth

        </ul>
      </div>
    </div>
    </nav>
    <div class="container-fluid">
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
