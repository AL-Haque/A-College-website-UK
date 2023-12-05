@extends('web.web_master')

@section('web-master')
<div class="container" style="padding-left: 4.7rem;padding-right:4.7rem">
    <div class="content-wrapper">
        <h3  class="card-title" style="text-align: center; padding-top:3rem; border-bottom:1px solid black">Faculty Information</h3>

        <div class="row">
            <div class="col-sm-6" >
                <div class="card1" style="border:1px solid #e6e6e6 ">
                    <div class="card-body" >
                        <div class="img">
                     <img width="100%" height="180px" src="{{ asset('images/'.$faculties->image) }}">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card"  style="border:1px solid #e6e6e6">
                <div class="card2" >
                    <div class="card-body">
                        <div class="facultyinfo" style="padding-top: 1rem; ">
                            <h4 style="text-align: left; line-height: normal;">Name:  <span> {{ $faculties->name }}</span></h4>
                            <p style="text-align: left; line-height: normal; font-size:17px">Department: <span>{{ $faculties->employee_id }}</span></p>
                            <p style="text-align: left; line-height: normal; font-size:17px">Designation: <span>{{ $faculties->designation }}<span></p>
                            <p style="text-align: left; line-height: normal; font-size:17px">Email: <span>{{ $faculties->email }}<span></p>
                            <p style="text-align: left; line-height: normal; font-size:17px">Phone: <span>{{ $faculties->phone }}<span></p>
                            <p style="text-align: left; line-height: normal; font-size:17px">Facebook: <span>{{ $faculties->facebook}}<span></p>
                            <p style="text-align: left; line-height: normal; font-size:17px">LinkdIn: <span>{{ $faculties->linkdIn}}<span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
