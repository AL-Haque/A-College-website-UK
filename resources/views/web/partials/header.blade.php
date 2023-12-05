   <!-- Start: Header -->
   <style>
       .header-ul {
           margin-left: 7rem;
       }

       .navbar-custom-flex {
           flex-direction: row !important;
           margin-right: 6.8rem
       }

       @media(max-width:420px) {
           .header-ul {
               margin: 0 auto;
               margin-top: 5px;
           }

           .navbar-custom-flex {
               flex-direction: column !important;
               margin-right: 0;
           }
       }
   </style>
   <div class="sticky__container" data-sticky-container>

       <nav class="navbar navbar-expand-lg navbar-light new_grey  d-lg-block d-print-none">
           <div class="container-fluid " style="background-color: brown;">

               <ul class="navbar-nav flex-row  d-md-flex header-ul">

                   <li class="nav-item" style="text-align: left"><a href="https://twitter.com/i/flow/login"
                           target="_blank"class="social-icon nav-link">
                           <span><span class="sr-only">Twitter</span>
                               <i class="fa fa-twitter" aria-hidden="true"></i>
                           </span></a>
                   </li>
                   <li class="nav-item"><a href="https://www.youtube.com/" target="_blank" class="social-icon nav-link">
                           <span><span class="sr-only">Youtube</span>
                               <i class="fa fa-youtube-play" s aria-hidden="true"></i>
                           </span></a>
                   </li>
                   {{-- <li class="nav-item1"><a href="https://www.instagram.com/" target="_blank" class="social-icon nav-link">
                           <span><span class="sr-only">Instagram</span>
                               <i class="fa fa-instagram" aria-hidden="true"></i>
                           </span></a>
                   </li> --}}
                   <li class="nav-item"><a href="https://www.linkedin.com/" target="_blank"
                           class="social-icon nav-link">
                           <span><span class="sr-only">LinkedIn</span>
                               <i class="fa fa-linkedin" aria-hidden="true"></i>
                           </span></a>
                   </li>
                   {{--
                   <li class="nav-item"><a href="https://accounts.snapchat.com/accounts/v2/login"target="_blank"
                           class="social-icon nav-link">
                           <span><span class="sr-only">SnapChat</span>
                               <i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
                           </span></a>
                   </li> --}}
                   <li class="nav-item"><a href="https://www.facebook.com/" target="_blank"
                           class="social-icon nav-link">
                           <span><span class="sr-only">Facebook</span>
                               <i class="fa fa-facebook-f" aria-hidden="true"></i>
                           </span></a>
                   </li>
                   <li class="nav-item"><a href="" class="social-icon nav-link">
                           <span><span class="sr-only">Threads</span>
                               <i class="fab fa-brands fa-threads" aria-hidden="true"></i>
                           </span></a>
                   </li>
               </ul>
               <!-- Right elements -->
               <ul class="navbar-nav navbar-custom-flex top-header-links" style="background-color: brown;">
                   @foreach ($info as $item)
                       <li class="nav-item"><a class="nav-link" style="font-size: 15px" href="mailto:$item->email">
                               Email : <span>{{ $item->email }}</span></a></li>
                       <li class="nav-item"><a class="nav-link"style="font-size: 15px" href="tel:$item->phone "><i
                                   class="fa fa-phone"></i> Hot
                               Line :
                               <span>{{ $item->phone }}</span></a></li>
                   @endforeach
               </ul>
           </div>

       </nav>
       <header class="header__wrapper sticky" data-sticky data-check-every="0" data-margin-top="0">
           <div class="header__container">
               <div class="header__logo d-flex align-items-center" style="height:5.3rem">
                   <a class="brand__logo" href="index.html" title="STPC"> <a href="{{ route('index') }}"> <img
                               style="border-radius:8px" src="{{ asset('images/' . $item->logo) }}" alt="HRUC"
                               width="90px" /></a>
                   </a>
                   <a href="{{ route('index') }}">
                       <h5 class="tag_line" style="color: black"> {{ $item->name }}</h5>
                   </a>
               </div>
               <div class="btn" style="margin-left:43.9rem;text-align:right;"><a href="{{ route('contact.index') }}">
                       <button type="admission" style="background: red; color:white"
                           class="btn btn-primary mr-2">Admission</button></a>
               </div>
           </div>
           <div class="header__containe" style="height:2.6rem">

               <div class="container" style="padding-right: 3.5rem;">

                   <div class="header__navigation">
                       <nav class="main-navigation">
                           <ul class="menu horizontal align-right">
                               <li class="menu-item item-115 current active"><a href="{{ route('index') }}">
                                       <h6
                                           style="font-size: 15px;vertical-align:center;font-weight:300;margin-top:.3rem">
                                           Home</h6>
                                   </a>
                               </li>
                               <li class="menu-item item-115 current active"><a href="{{ route('about') }}">
                                       <h6
                                           style="font-size:15px;vertical-align:center;font-weight:300;margin-top:.3rem">
                                           About us</h6>
                                   </a>
                               </li>
                               <li class="menu-item item-112"><a href="{{ route('course') }}"><span>
                                           <h6
                                               style="font-size: 15px;vertical-align:center;font-weight:300;margin-top:.3rem">
                                               Find a Course</h6>
                                       </span></a>
                               </li>
                               <li class="menu-item item-114"><a href="{{ route('contact.index') }}">
                                       <h6
                                           style="font-size: 15px;vertical-align:center;font-weight:300;margin-top:.3rem">
                                           Contact</h6>
                                   </a></li>
                               <li class="menu-item item-152"
                                   style="background-color: brown; padding: 0 45px 0px 40px; text-align:center;height:2rem;">
                                   <a href="https://stpeterscollege.co.uk:2096/" target="_blank">
                                       <h6 style="font-size: 15px;font-weight:300;">
                                           Web Mail</h6>
                                   </a>
                               </li>
                           </ul>
                       </nav>

                   </div>

               </div>
               <div class="menu-toggle__container">
                   <button type="button" class="menu-toggle" data-toggle="offCanvas"><i class="fa fa-bars"></i>
                       Menu</button>
               </div>
           </div>
       </header>
   </div>

   <!-- End: Header -->
