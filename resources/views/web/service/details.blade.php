@extends('web.web_master')

@section('web-master')
<div class="container" style="padding-left: 4rem;padding-right:4rem" >
    <div class="container-fluid">
    <div class="content-wrapper">
        <h3  style="text-align: center;border-bottom:1px solid black;padding-top:3rem; ">Service Information</h3>

        <div class="row pt-3" >
            <div class="col-sm-6"  >
                <div class="card1"  style="border:1px solid #e6e6e6;border-radius:5px">
                    <div class="card-body" >

                     <img  height="100%" width="100%" src="{{ asset('images/'.$service->image) }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card" style="border:1px solid #e6e6e6;border-radius:5px">
                <div class="card2">
                    <div class="card-body" >
                        <div class="facultyinfo">
                            <h4 style="text-align: left; line-height: normal;">Name:  <span> {{ $service->title }}</span></h4>
                            <h4 style="text-align: left; line-height: normal;"> {!!$service->details!!}</h4>
                            <div  style="text-align: left; line-height:normal; font-size:17px; display:flex ">{!!$service->description!!}</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
