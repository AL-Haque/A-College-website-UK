@extends('web.web_master')

@section('web-master')
<div class="container">
    <div class="content-wrapper" style="padding-left: 4rem;padding-right:4rem">
        <h3 class="card-title" style="text-align: center; padding-top:50px; border-bottom:1px solid black">Upcoming News and Events</h3>

        <div class="row pt-4">
            <div class="col-sm-6 " style="border: 1px solid #e6e6e6;"  >
                <div class="card1">
                    <div class="card-body">

                     <img  height="100%" width="100%" src="{{asset($newsDetails->news_image)}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card"style="border: 1px solid #e6e6e6;" >
                <div class="card2" >
                    <div class="card-body" >
                        <div class="facultyinfo" style="padding: 10px; ">
                            <h4 style="text-align: left; line-height: 25px;">Title:  <span> {{ $newsDetails->news_title }}</span></h4>
                            <div style="text-align: left; line-height: 30px; font-size:17px"><div><span>{!!$newsDetails->news_description!!}</span></div></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
