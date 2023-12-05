<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="index.html"><img style=" height: 65px; width:100%" src="images/head.jpg" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
        <span class="typcn typcn-th-menu"></span>
      </button>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-2">



      </ul>
      <ul class="navbar-nav navbar-nav-right">

        </li>
        @if(Auth::check())
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
            <i class="typcn typcn-user-outline mr-0"></i>
            <span class="nav-profile-name"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a href="{{route('password')}}" class="dropdown-item">
            <i class="typcn typcn-cog text-primary"></i>
           Forgotten Password
            </a>
            <a class="dropdown-item" href="{{route('logout')}}"  onclick=" return confirm('Are You Sure!')">
            <i class="typcn typcn-power text-primary" > </i>
            Logout
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="typcn typcn-th-menu"></span>
      </button>
    </div>

    @else


    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('showregister')}}">Registration</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('showLogin')}}">Login</a></li>

    </ul>
@endif
  </nav>
