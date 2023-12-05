@extends('web.web_master')
<!-- banner section start -->
@section('web-master')
    <section>
        <div class="container">
            <div class="container-fluid cc-footer-container">
                <h3 style="text-align: center; padding-top:40px;  border-bottom:1px solid black">Latest Video</h3>
                <div class="row">
                    @foreach ($videoGallery as $item)
                        <div class="col-md-4 col-lg-4 text-center mb-4">
                            <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-4 p-md-0 mb-md-0">
                                <iframe width="100%" height="300px" src="{{ $item->video_url }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="container-fluid cc-footer-container">

                <h3 style="text-align: center; padding-top:20px; padding-bottom:20px ">Video Gallery</h3>
                <div class="row">
                    <div class="col-md-12 col-lg-6 ">
                        @foreach ($videos as $item)
                            <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-4 p-md-0 mb-md-0">
                                <div class="card-img-top d-none d-md-block" style="height: 150%;">
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
                    <div class="col-md-3 col-lg-3 text-center mb-3 ">
                        <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-3 p-md-0 mb-md-0">
                            @foreach ($videos as $item)
                                <div class="card-img-top  d-md-block">
                                    <iframe width="100%" height="196px" src="{{ $item->video_url }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            @endforeach
                            <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-3 p-md-0 mb-md-0">
                                @foreach ($videos as $item)
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
                    <div class="col-md-3 col-lg-3 text-center mb-3 ">
                        <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-3 p-md-0 mb-md-0">
                            @foreach ($videos as $item)
                                <div class="card-img-top  d-md-block">
                                    <iframe width="100%" height="195px" src="{{ $item->video_url }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            @endforeach

                            <div class="card card-noborder h-100 bg-dgreen m-0 m-md-0 p-3 p-md-0 mb-md-0">
                                @foreach ($videos as $item)
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

            </div>

        </div>
        </div>
    </section>
@endsection
