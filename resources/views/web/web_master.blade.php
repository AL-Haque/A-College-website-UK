<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en-gb" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <base />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1;" />
    <meta name="author" content="Super User" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#5B388F" />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>Home - St. Peter's College</title>
    <meta property="og:title" content="About Us" />
    <meta property="og:type" content="website" />
    <link href="index.html" itemprop="url" />
    <link href="{{ asset('web/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Crimson:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('web/https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slick-theme.css') }}">
    <link href="{{ asset('web/css/templateb77c.css') }}" rel="stylesheet" />

    <script src="{{ asset('web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('web/js/captionb77c.js') }}"></script>
    <script src="{{ asset('web/js/requestAnimFrameb77c.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">

</head>

<body class="com_content view-article no-layout no-task itemid-115 homepage no-slideshow">

    <div class="off-canvas-wrapper">
        <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
            <div class="header__navigation_mobile">
                <ul class="menu vertical align-right">
                    <li class="menu-item item-115 current"><a href="{{route('about')}}" target="blank">About Us</a></li>
                    <li class="menu-item item-112"><a href="{{route('course')}}" target="blank"><span>Find a course</span></a></li>
                    {{-- <li class="menu-item item-147"><a href="apperntices.html"><span>Apprenticeships</span></a>
                    </li> --}}
                    <li class="menu-item item-113"><a href="{{route('faculty')}} "target="blank"><span>Faculty</span></a></li>
                    {{-- <li class="menu-item item-157"><a href="vacancies.html"><span>Vacancies</span></a> --}}
                    </li>
                    <li class="menu-item item-114"><a href="{{route('contact.index')}}"target="blank">Contact</a></li>
                    <li class="menu-item item-114"><a href="{{route('contact.index')}}"target="blank">Admission</a></li>
                    {{-- <li class="menu-item item-143"><a href="policy.html">Policies</a></li> --}}
                    {{-- <li class="menu-item item-144"><a href="international.html">International</a></li> --}}
                    <li class="menu-item item-134"
                        style="background-color: brown; padding: 0 45px 0px 40px; text-align: center;"><a
                            href="https://stpeterscollege.co.uk:2096/" target="blank">Web
                            Mail</a></li>
                </ul>

            </div>
        </div>

        <div class="off-canvas-content" data-off-canvas-content>
            @include('web.partials.header')

            <!-- Start: Main -->
            <div id="main-content">&nbsp;</div>
            <div class="main__wrapper">
                @yield('web-master')
            </div>

            <!-- End: Main -->

           @include('web.partials.footer')

        </div>
    </div>

    <script src="{{ asset('web/js/what-input.minb77c.js') }}" defer></script>
    <script src="{{ asset('web/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('web/js/slick.min.js') }}"></script>
    <script src="{{ asset('web/js/foundation.minb77c.js') }}" defer></script>
    <script src="{{ asset('web/js/appb77c.js') }}" defer></script>
    <script src="{{ asset('web/js/custom.js') }}"></script>

</body>

</html>
