@extends('web.web_master')
@section('web-master')
    <div class="container">
        <div class="container-fluid cc-footer-container" style="padding-left: 3.7rem;padding-right:3.7rem">
            <div class="page-header">
                <h1 style="padding-top: 40px; border-bottom:1px solid black"> Faculty Information </h1>
            </div>
            <div class="row">
                @foreach ($faculty as $item)
                    <div class="col-md-6 col-lg-3 text-center mb-3" >
                        <div class="faculty" style="padding: 1rem">

                            <a  class="image-hover gallery" title="Gallery" data-fancybox="gallery"
                                data-caption="Gallery">
                                <div class="card-img-top  d-md-block" >
                                   <a href="{{route('faculty.details',$item->id)}}"><img class="img-fluid" style="height:18rem;width:100%"
                                        src="{{ asset('images/'.$item->image) }}" >

                                </div>

                            </a>
                            <div class="facultyinfo" style="padding: 10px; text-aling:center ">
                                <h6 style="text-align:center; line-height: 12px;">{{  $item->name }}</h6>
                                <p style="text-align:center;line-height: 12px; ">{{  $item->employee_id }}</p>
                                <p style="text-align:center ; line-height: 20px;">{{  $item->designation }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
@endsection
