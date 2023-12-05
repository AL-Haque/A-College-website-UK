        @extends('web.web_master')
        <!-- banner section start -->
        @section('web-master')
            <section>

                <div class="banner" style="height: 550px; padding-top: 1px;">
                    @foreach ($slider as $item)
                        <div class="ban-item">
                            <img src="{{ asset('images/' . $item->image) }}" alt=" ">
                        </div>
                    @endforeach

                    @foreach ($slide as $item)
                        <div class="ban-item">
                            <img src="{{ asset('images/' . $item->image) }}" alt=" ">
                        </div>
                    @endforeach
                </div>


            </section>

            <div class="main__container">
                <!-- about us -->
                <section>
                    @foreach ($info as $item)
                        <div class="row" style="
                        margin-top:70px">
                            <div class="col-lg-6">
                                <div class="page-header">
                                    <h1>Wellcome to {{ $item->name }}</h1>
                                </div>
                                <div class="articleBody" style="padding-left:.7rem; padding-right:.5rem;text-align:justify">
                                    {!! $item->about !!}<a href="{{ route('about') }}" style="padding: 0%; color:red">
                                        see more</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="welcome_image" style="height: 100%;width:98%">
                                    <img src="{{ asset('images/' . $item->image) }}" alt=" ">
                                </div>
                            </div>
                        </div>

                </section>
            </div>
            @endforeach
            <!-- about us end -->


            <!-- Our Courses start -->
            <div class="main__container">
                <div class="container-fluid cc-footer-container">
                    <div class="page-header">
                        <h1 style="border-bottom: 1px solid black; padding-bottom:5px"> Course Information </h1>
                    </div>
                    <div class="row">
                        @foreach ($course as $item)
                            <div class="col-lg-3 text-center mb-2">
                                <div class="card" style="border-radius:5px;">
                                    <div class="card-body">
                                        <a href="{{ route('course.details', $item->id) }}">
                                            <div class="card-img">
                                                <img class="img-fluid" style="height: 12rem; width: 100%;"
                                                    src="{{ asset('images/' . $item->image) }}">
                                            </div>
                                        </a>
                                        <div class="facultyinform " style="padding: 10px; ">
                                            <h4 style="text-align:center; line-height: 10px;" class="py-2">
                                                {{ $item->name }}</h4>
                                            <h6 style="text-align:center; line-height: 10px;">{{ $item->duration }}</h6>
                                            {{-- <h6 style="text-align: left; line-height: 10px;">{{$item->designation}}</h6> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                    <div class="col-lg-12 " style="padding-top: .5rem;">
                        <div class="bt" style="text-align:right">
                            <a href="{{ route('course') }}" class="btn btn-green"> View More </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- our speciality start -->
            <div class="wrapper">
                <div class="container-fluid cc-footer-container">
                    <div class="page-header">
                        <h1 style="border-bottom: 1px solid black; padding-bottom:5px"> Our Speciality</h1>
                    </div>
                    <div class="row">
                        @foreach ($service as $item)
                            <div class="col-md-6 col-lg-3 text-center" style="padding:1rem">
                                <div class="card h-100 m-0  p-3 mb-md-0" style="border-radius:.5rem; ">
                                    <div> <a href="{{ route('service.details', $item->id) }}"><i
                                                class="fa fa-clock-o fa-4x"></i></a></div>

                                    <div class="h4 " style="padding-left: .5rem; padding-right: .5rem">
                                        {{ $item->title }}</div>
                                    {{-- <div class="details center" style="text ">
                                        {!! $item->details !!}</div> --}}
                                    <div class="details">
                                        <p style="padding-left: .5rem; padding-right: .5rem">{{ $item->description }}</p>

                                        <div class="arrow" style="padding-left: 230px;"> <a href={{ route('service') }}>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                </svg> </a></div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- our speciality end -->


            <!-- our photo gallery start -->
            <div class="main__container">
                <div class="container-fluid cc-footer-container">
                    <div class="page-header" style="padding-top:15px; padding-bottom:0%">
                        <h1 style="border-bottom: 1px solid black; padding-bottom:5px"> Photo Gallery </h1>
                    </div>
                    <div class="row">


                        @foreach ($photo as $item)
                            {{-- <div class="column">
                              <img src="images/3.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                            </div> --}}
                            {{-- <div class="column">
                              <img src="images/1.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                            </div> --}}
                            {{-- <div class="column">
                              <img src="images/3.jpg"  style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                            </div> --}}
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card" style="border-radius:5px">
                                    <div class="card-body">
                                        <img src="{{ asset('images/' . $item->image) }}"style="width:100% ;height:220px;border-radius:5px"
                                            onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="div" style="display: flex;">
                            <div id="myModal" class="modal" style="10rem">
                                <span class="close cursor" onclick="closeModal()">&times;</span>
                                <div class="modal-content">
                                    @foreach ($photo as $item)
                                        <div class="mySlides">
                                            <div class="numbertext">1 / 4</div>
                                            <img src="{{ asset('images/' . $item->image) }}"
                                                style="width:100% ;height:20rem">>
                                        </div>
                                    @endforeach
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor" src="{{ asset('images/' . $item->image) }}"
                                                style="width:100% ;height:80%" onclick="currentSlide(1)">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="{{ asset('images/' . $item->image) }}"
                                                style="width:100% ;height:80%" onclick="currentSlide(2)">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="{{ asset('images/' . $item->image) }}"
                                                style="width:100% ;height:80%"onclick="currentSlide(3)">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="{{ asset('images/' . $item->image) }}"
                                                style="width:100% ;height:80%" onclick="currentSlide(4)">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center">
                            <div class="more_bt" style="text-align:right; padding-top:1rem">
                                <a href="{{ route('photoGallery') }}" class="btn btn-green"> View More </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- our photo gallery end -->


            <!-- our video gallery start -->
            <div class="main__container">
                <div class="container-fluid cc-footer-container">
                    <div class="page-header">
                        <h1 style="border-bottom: 1px solid black; padding-bottom:5px"> Video Gallery </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            @foreach ($videos as $key => $item)
                                <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-4 p-md-0 mb-md-0">
                                    <div class="card-img-top" style="height: 150%;">
                                        <iframe width="100%" height="400px" src="{{ $item->video_url }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="card-body d-flex flex-column p-1 text-center text-sm-start">
                                        <div class="mt-auto text-center">
                                            <strong>Video</strong>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class=" col-lg-3 text-center mb-3 ">
                            <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-3 p-md-0 mb-md-0">
                                @foreach ($video as $item)
                                    <div class="card-img-top  d-md-block mb-2">
                                        <iframe width="100%" height="195px" src="{{ $item->video_url }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                @endforeach
                                <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-3 p-md-0 mb-md-0">
                                    @foreach ($vide as $item)
                                        <div class="card-img-top  d-md-block ">
                                            <iframe width="100%" height="195px" src="{{ $item->video_url }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 text-center mb-3 ">
                            <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-3 p-md-0 mb-md-0">
                                @foreach ($vid as $item)
                                    <div class="card-img-top d-md-block mb-2">
                                        <iframe width="100%" height="195px" target="_blank"
                                            src="{{ $item->video_url }}" title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                @endforeach
                                <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-3 p-md-0 mb-md-0">
                                    @foreach ($vi as $item)
                                        <div class="card-img-top  d-md-block">
                                            <iframe width="100%" height="195px" src="{{ $item->video_url }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- our video gallery end -->
                    <div class="col-lg-12 text-center">
                        <div class="more_bt" style="text-align:right;">
                            <a href="{{ route('videoGallery') }}"class="btn btn-green"> View More </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__container">
                <div class="container-fluid cc-footer-container">
                    <div class="page-header">
                        <h1 style="border-bottom: 1px solid black; padding-bottom:5px"> Faculty Information </h1>
                    </div>
                    <div class="row">
                        @foreach ($employee as $item)
                            <div class="col-md-6 col-lg-2 text-center mb-2 ">
                                <div class="faculty" style="padding: .5rem;height:300px">
                                    <a href="#" class="image-hover gallery" title="Gallery"
                                        data-fancybox="gallery" data-caption="Gallery">
                                        <div class="card-img-top  d-md-block"><a
                                                href="{{ route('faculty.details', $item->id) }}">
                                                <img class="img-fluid" style="height: 12rem; width: 100%;"
                                                    src="{{ asset('images/' . $item->image) }}" alt="Gallery"></a>
                                        </div>
                                    </a>
                                    <div class="facultyinfo" style="padding:10px; text-align:center">
                                        <h6 style="line-height:.6rem; ">{{ $item->name }}</h6>
                                        <p style="line-height:.7rem; font-size:15px">
                                            {{ $item->designation }}</p>
                                        <p style="line-height:normal; font-size:15px; padding-top:.3rem">
                                            {{ $item->employee_id }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12">
                        <div class="more_bt" style="text-align:right; padding-right:1rem">
                            <a href="{{ route('faculty') }}" class="btn btn-green"> View More </a>
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="main__container">
                    <div class="container-fluid cc-footer-container">
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- <div class="item-page" style="padding-right: 15px; padding-top:10px"> --}}
                                <div class="page-header" style=" padding-top:15px">
                                    <h1> Our UP-Coming Events </h1>
                                </div>
                                <div class="articleBody border">

                                    <marquee scrollamount="3" width="100%" height="349px" direction="up">
                                        @foreach ($newsEvents as $item)
                                            <div class="item  p-4">
                                                <strong
                                                    style="font-size: 15px; border-bottom:1px solid black;font-weight:900 ">{{ $item->news_title }}
                                                </strong>
                                                {{-- <span style="font-size: 15px; text-align:left"> {{ $item->created_at->diffForHumans() }}</span> --}}
                                                <span
                                                    style="margin-left:12rem;font-size:13px;color:rgb(209, 214, 218) font-weight:100">{{ $item->created_at }}
                                                </span>
                                                <p style="text-align: justify;"><span
                                                        style="font-size:13px; color:rgb(209, 214, 218) ">
                                                        {!! $item->news_description !!}<a style="color: red; font-size:13px;"
                                                            href={{ route('news', $item->id) }}>See
                                                            more</a>
                                                    </span></p>
                                            </div>
                                        @endforeach
                                    </marquee>
                                </div>
                                {{-- </div> --}}
                            </div>

                            @foreach ($newsEvent as $item)
                                <div class="col-lg-6">
                                    <div class="welcome_image1" style="margin-top:15px">
                                        <img src="{{ asset($item->news_image) }}" alt="" width="100%"
                                            height="450px">
                                        {{-- <div class="top-left">{{ $item->created_at }}</div> --}}
                                        {{-- <div class="centered">
                                        <h3>{{ $item->news_title }}</h3>
                                    </div> --}}
                                        {{-- <div class="centered1">
                                        <p>{{ $item->news_details }}</p>
                                    </div> --}}
                                    </div>
                                </div>
                        </div>
                        @endforeach
                        <div class="col-lg-12 text-center pt-4">
                            <div class="more_bt" style="text-align:right">
                                <a href="{{ route('newsEvents') }}" class="btn btn-green"> View More </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection




        <style>
            body {
                font-family: Verdana, sans-serif;
                margin: 0;
            }

            * {
                box-sizing: border-box;
            }

            .row>.column {
                padding: 0 8px;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            .column {
                float: left;
                width: 25%;
            }

            /* The Modal (background) */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 100px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: black;
            }

            /* Modal Content */
            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                width: 90%;
                max-width: 1200px;
            }

            /* The Close Button */
            .close {
                color: white;
                position: absolute;
                top: 10px;
                right: 25px;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #999;
                text-decoration: none;
                cursor: pointer;
            }

            .mySlides {
                display: none;
            }

            .cursor {
                cursor: pointer;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            img {
                margin-bottom: -4px;
            }

            .caption-container {
                text-align: center;
                background-color: black;
                padding: 2px 16px;
                color: white;
            }

            .demo {
                opacity: 0.6;
            }

            .active,
            .demo:hover {
                opacity: 1;
            }

            img.hover-shadow {
                transition: 0.3s;
            }

            .hover-shadow:hover {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
        <script>
            function openModal() {
                document.getElementById("myModal").style.display = "block";
            }

            function closeModal() {
                document.getElementById("myModal").style.display = "none";
            }

            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                captionText.innerHTML = dots[slideIndex - 1].alt;
            }
        </script>
