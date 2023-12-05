@extends('web.web_master')

@section('web-master')
    <section>
        <div class="container">
            <div class="container-fluid cc-footer-container" style="padding-left: 3.7rem;padding-right:3.7rem">
                <div class="page-header">
                    <h1 style="border-bottom: 1px solid black; padding-top:2.5rem"> Course Information </h1>
                </div>
                <div class="row">
                    @foreach ($courseDetails as $item)
                        <div class="col-md-6 col-lg-3  mb-2 text-center">
                            <div class="card">
                                <div class="card-body">

                                <a href="images/2257.jpg" class="image-hover gallery" title="Gallery" data-fancybox="gallery"
                                    data-caption="Gallery">
                                    <div class="card-img-top  d-md-block">
                                        <a href="{{ route('course.details', $item->id) }}"> <img class="img-fluid"
                                                style="height:15rem; width: 100%;"
                                                src="{{ asset('images/' . $item->image) }}" alt="">
                                    </div>

                                </a>
                                <div class="facultyinfo text-center" style="padding: 10px; ">
                                    <p style= "line-height: normal; font-size:30px">{{ $item->name }}</p>
                                    <h6 style=" line-height: normal;">{{ $item->duration }}</h6>
                                    <div class="details" style="padding-top: .5rem;" >
                                        {!! Str::limit($item->description, 100, ' ...')!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
