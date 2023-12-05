@extends('layouts.adminLayout')

@section('content')
    @include('admin.Alert')
    @include('massage')
    <div class="content-wrapper">
      <div class="header" style="text-align: center; padding-bottom:50px">
                    <h1><b> ST PETER'S COLLEGE</b></h1>
                    <h4><b> Admin Panel</b></h5>
                    </div>


        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h3><b> USER</b></h3>
                        <div class="user">
                          <h3>  {{$user}} <h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h3><b>Slider</b></h3>
                        <div class="slider">
                            <h3> <b> {{$slider}} </b><h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h3><b>Employee</b></h3>
                        <div class="employee">
                            <h3> <b>{{$employee}}</b></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h3><b> Service</b></h3>
                        <div class="service">
                          <h3><b>{{$service}} </b><h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h3> <b>Course</b></h3>
                        <div class="course">
                            <h3> <b> {{$course}} </b><h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h3><b> Photo<b></h3>
                        <div class="photo">
                           <h3 ><b>{{$photo}}</b><h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
