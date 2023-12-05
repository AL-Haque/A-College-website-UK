
@extends('web.web_master')

@section('web-master')
<section>

    <div class="container">
        <div class="container-fluid cc-footer-container" style="padding-left: 3.7rem;padding-right:3.7rem">
            <div class="page-header">
                <h1 style="padding-top: 40px;border-bottom:1px solid black"> News and Events</h1>
            </div>
            <div class="row">
                @foreach ($newsEvent as $item)
                    <div class="col-md-6 col-lg-3  mb-3">
                        <div class="card " style="border-radius:5px">
                        <div class="card-body text-center " style="height:100%;" >

                            <a  class="image-hover gallery" title="Gallery" data-fancybox="gallery"
                                data-caption="Gallery">
                                <div class="card-img-top d-none d-md-block" >
                                   <a href="{{route('news',$item->id)}}">
                                    <img class="img-fluid" width="100%"  style= max-height:100%;
                                        src="{{ asset($item->news_image)}}">
                                </div>
                            </a>
                            <div class="facultyinfo pt-2" >
                                <h5 style=" line-height:20px;font-weight:600">{{ $item->news_title }}</h5>
                                <p style=" line-height:20px; font-size:15px">{{ $item->news_details }}</p>

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

