@extends('web.web_master')

@section('web-master')

<div class="container" style="padding-left: 4rem;padding-right:4rem">
    <div class="container-fluid">
    <div class="content-wrapper">
        <h3  style="text-align: center;border-bottom:1px solid black;padding-top:3rem; border-radius:5px; margin-bottom:15px ">Service Information</h3>
            </div>
            <div class="row">
                @foreach ($services as $item)
                    <div class="col-md-6 col-lg-3 text-center mb-2 text-center" >

                         <div class="card" style="border-radius: 5px">
                            <a href="images/2257.jpg" class="image-hover gallery" title="Gallery" data-fancybox="gallery"
                                data-caption="Gallery">
                                <div class="card-img-top d-md-block " style="padding: 1rem" >
                                    <a href="{{ route('service.details', $item->id) }}"> <img class="img-fluid"
                                            style="height: 250px; width: 100%;"
                                            src="{{ asset('images/' . $item->image) }}" alt="">
                                </div>
                            </a>
                            <div class="details" style="padding:1rem; ">
                                <h5 style="text-align: left; line-height: normal;">{{ $item->title }}</h5>
                                <p style="text-align: left; line-height: normal; font-weight:300">{{ $item->description }}</p>
                                {{-- <div>
                                    {!! $item->description !!}
                                </div> --}}
                            </div>

                    </div>
                </div>
                @endforeach

        </div>
    </div>
</div>
@endsection
