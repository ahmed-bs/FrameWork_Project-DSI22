<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'dabchy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</link>
</head>
<body>
    <div id="app">
       
     
      <!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar bg-light">

<a class="navbar-brand" href="#!">
  <img src="https://www.pngitem.com/pimgs/m/6-69782_fashion-model-silhouette-silhouette-fashion-designer-logo-hd.png" height="60" alt="">
</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1"
  aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Breadcrumbs -->
<div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">dabchy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
       </ul>
<!-- Breadcrumbs -->

<!-- Links -->
<div class="collapse navbar-collapse " id="basicExampleNav1">

  <!-- Right -->
  <ul class="navbar-nav ml-auto  ">
    <li class="nav-item">
      <a href="#!" class="nav-link navbar-link-2 waves-effect">
        <span class="badge badge-danger">1</span>
        <i class="fas fa-shopping-cart pl-0"></i>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="true">
        <i class="fas fa-flag-usa m-0"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#!">Action</a>
        <a class="dropdown-item" href="#!">Another action</a>
        <a class="dropdown-item" href="#!">Something else here</a>
      </div>
    </li>
    <li class="nav-item">
      <a href="#!" class="nav-link waves-effect">
        Shop
      </a>
    </li>
    <li class="nav-item">
      <a href="#!" class="nav-link waves-effect">
        Contact
      </a>
    </li>
    <li class="nav-item">
      <a href="#!" class="nav-link waves-effect">
        Sign in
      </a>
    </li>
    <li class="nav-item pl-2 mb-2 mb-md-0">
      <a href="#!" type="button"
        class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign up</a>
    </li>
  </ul>

</div>

<!-- Links -->

</nav>
<br>
<br>
<!-- Navbar -->
        <main class="py-4">
            @yield('content')

        </main>
         <!-- Footer-->
         <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
    </div>
</body>
</html>