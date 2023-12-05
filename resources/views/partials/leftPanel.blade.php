<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="{{asset('images/'.$info->logo)}}" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">
            {{Auth::user()->name}}
            </p>
            <p class="sidebar-designation">
              Welcome
            </p>
          </div>
        </div>


      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link"  href="{{route('formelements')}}">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title" >From Elements </span>
        </a>
      </li> --}}


      <li class="nav-item">
        <a class="nav-link" href="{{route('company.index')}}">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title" >Company Profile </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('slider.index')}}">
          <i class="typcn typcn-support" style="padding-right: 1.4rem" ></i>
          <span class="menu-title"  >Slider</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('employee.index')}}">
          <i class="typcn typcn-document-add" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Faculty</span>
        </a>
      </li>




      <li class="nav-item">
        <a class="nav-link" href="{{route('service.index')}}">
          <i class="typcn typcn-business-card" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Service</span>
        </a>
      </li>
{{--
      <li class="nav-item">
        <a class="nav-link" href="{{route('category.index')}}">
          <i class="typcn typcn-home-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Category</span>
        </a>
      </li> --}}

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('subCategory.index')}}">
          <i class="typcn typcn-group" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Sub-Category</span>
        </a>
      </li> --}}

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('partner.index')}}">
          <i class="typcn typcn-contacts" style="padding-right: 1.4rem" ></i>
          <span class="menu-title" >Partner</span>
        </a>
      </li> --}}


      {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">
          <i class="typcn typcn-th-small-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Product</span>
        </a>
      </li> --}}


      <li class="nav-item">
        <a class="nav-link" href="{{route('course.index')}}">
          <i class="typcn typcn-th-menu-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Course</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('photo.index')}}">
          <i class="typcn typcn-th-small-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Photo</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route('video.index')}}">
          <i class="typcn typcn-th-small-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Video</span>
        </a>
      </li>




      <li class="nav-item">
        <a class="nav-link" href="{{route('news_event.index')}}">
          <i class="typcn typcn-th-small-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >News & Events</span>
        </a>
      </li>



      <li class="nav-item">
        <a class="nav-link" href="{{route('map.index')}}">
          <i class="typcn typcn-th-small-outline" style="padding-right: 1.4rem"></i>
          <span class="menu-title" >Location</span>
        </a>
      </li>



      </li>




  </nav>
