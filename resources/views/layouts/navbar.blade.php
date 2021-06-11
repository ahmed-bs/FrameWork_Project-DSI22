      <!-- Navbar -->
      <img src="https://www.pngitem.com/pimgs/m/6-69782_fashion-model-silhouette-silhouette-fashion-designer-logo-hd.png" height="60" alt="">

<div class="p-2 mb-2 bg-info text-white container"  >
  
   

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1"
  aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Breadcrumbs -->
<div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="#">bienvenue dans dabchy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
       </ul>
<!-- Breadcrumbs -->

<!-- Links -->
<div class="collapse navbar-collapse " id="basicExampleNav1">

  <!-- Right -->
  <ul class="navbar-nav ml-auto  ">
   
  
    <li class="nav-item">
      
    <a href="{{ route('views.create') }}" class="nav-link waves-effect"><i class="fas fa-plus"></i>  je vends un article</a>
    <div class="col-lg-3">

    </li>
    <li class="nav-item">
      <a href="#!" class="nav-link waves-effect">
        Contact
      </a>
    </li>
   <!-- Authentication Links -->
   @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item">
                  <a href="{{ route('cart.index') }}" class="nav-link navbar-link-2 waves-effect">
                    <span class="badge badge-danger">{{Cart::count()}}</span>
                    <i  href="" class="fas fa-shopping-cart pl-0"></i>
                  </a>
                </li>
               
  </ul>


</div></div>
<!-- Links -->

