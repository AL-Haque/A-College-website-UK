@extends('web.web_master')

@section('web-master')
    <section>

        <div class="container">
            <div class="container-fluid cc-footer-container">
                <div class="page-header">
                    <h1 style="padding-top: 40px;border-bottom:1px solid black"> Contact Us</h1>
                </div>
                @foreach ($info as $item)
                    <div class="row">

                        <div class="col-md-3 col-lg-4 text-center mb-3">
                            <div class="card">
                                <div class="card-body" style="background: rgb(240, 236, 236)">
                                    <i class="fa fa-phone"
                                        style="font-size:48px;color:rgb(11, 49, 173); border:1 px solid black; border-radius:10px"></i>

                                    <div class="address">
                                        <p> Talk To Us</p>
                                        {{-- <span> Interested in our College? </span>
                                        <p>Just Pick The Phone ANd contact With us</p> --}}
                                        <h5 style="color: rgb(60, 60, 158);padding-top:1rem">{{ $item->phone }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-4 text-center mb-3">
                            <div class="card">
                                <div class="card-body" style="background: rgb(240, 236, 236)">
                                    <i class="fa fa-envelope" style="font-size:48px;color:rgb(108, 22, 247)"></i>
                                    <div class="contact">
                                        <p> Mail To Us</p>
                                        {{-- <span> Interested in our College? </span>
                                        <p>Just Pick The Phone ANd contact With us</p> --}}
                                        <h5 style="color: rgb(60, 60, 158);padding-top:1rem"> {{ $item->email }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-4 text-center mb-3">
                            <div class="card">
                                <div class="card-body" style="background: rgb(240, 236, 236)">
                                    <i class="fa fa-map-marker" style="font-size:48px;color:rgb(231, 28, 28)"></i>
                                    <div class="location">
                                        <p>Location</p>
                                        {{-- <span> Interested in our College? </span>
                                        <p>Just Pick The Phone ANd contact With us</p> --}}
                                        <h5 style="color: rgb(60, 60, 158);padding-top:1rem">{{ $item->address }}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="container">
        <div class="container-fluid cc-footer-container">
            {{-- <div class="page-header">
                    <h1 style="padding-top: 15px;border-bottom:1px solid black "> Contact Us</h1>
                </div> --}}
            <div class="row">
                {{-- @foreach ($course as $item) --}}
                <div class="col-md-2 col-lg-6 text-center mb-2">
                    <div class="card" >
                        <div class="map" style="padding:30px">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3383268412404!2d90.36660897514449!3d23.80656538661818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72d1a5bf2a9%3A0x25a0f9a592e96ad8!2sLink-Up%20Technology%20Ltd.!5e0!3m2!1sen!2sbd!4v1698740549907!5m2!1sen!2sbd"
                            width="100%" height="345" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
                {{-- @endforeach --}}
                <div class="col-md-2 col-lg-6 text-center ">
                    <div class="card" style="padding: 40px">
                        {{-- <div class="card-body"> --}}
                            {{-- <h3 style="text-align: left;"> Contact Us </h3> --}}

                            <form class="forms-sample" method="POST" action=" {{ route('contact.store') }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <div class="col-sm-12" >
                                        <input type="text" name="name" class="form-control" placeholder="name">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12" >
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                </div>


                                <div class="form-group row">

                                    <div class="col-sm-12" >
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Address">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12" >
                                        <textarea type="text" cols="2" rows="5" name="question" placeholder='how can we help you'> </textarea>

                                    </div>
                                </div>
                                <div class="col-md-12 " style=" text-align:left;">
                                    <button type="submit" class="btn btn-primary"
                                        style="background: green">Submit</button>
                                    <button class="btn btn-light" style="background:red">Cancel</button>
                                </div>

                            </form>

                        {{-- </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>

    </div>
    </div>
@endsection
