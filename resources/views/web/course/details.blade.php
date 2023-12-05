@extends('web.web_master')

@section('web-master')
    <div class="container" style="padding-left: 3.7rem;padding-right:4.6rem">
        <div class="content-wrapper">
            <h3 class="card-title" style="text-align: center; padding-top:3rem;border-bottom:1px solid black">Course Information</h3>

            <div class="row pt-3" >
                <div class="col-sm-6">
                    <div class="card1" style="border:1px solid #e6e6e6">
                        <div class="card-body">
                            <img height="100%" width="100%" src="{{ asset('images/'.$courses->image) }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 "style="border:1px solid #e6e6e6;">
                    <div class="card1">
                        <div class="card-body" >
                            <div class="facultyinfo" style="padding: 1rem; ">
                                <h4 style="text-align: left; line-height: 25px;">Name: <span> {{ $courses->name }}</span>
                                </h4>
                                <h5 style="text-align: left; line-height: 25px;">
                                    Duration: <span>{{$courses->duration}}</span></h5>

                                <div class="details" style="text-align: left; line-height: 25px;">
                                    Description:<span>
                                        {!! Str::limit($courses->description, 650, ' ...')!!}
                                    <span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
