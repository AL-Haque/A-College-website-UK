@extends('web.web_master')
@section('web-master')
    <div class="container" style="padding-left: 3.7rem;padding-right:3.7rem">
        <div class="container-fluid">
            @foreach ($about as $item)
                <div class="row">
                    <div class="page-header" style="text-align: center; padding-top:2rem;">
                        <h1 style="padding-top: 20px;border-bottom:1px solid black "> Who We Are </h1>

                    </div>
                    <div class="col-lg-6">
                        <div class="item-page" style="padding-right: 15px;padding-top: 25px">

                            <div class="articleBody">
                                <h4 style="text-align: center">{{ $item->name }} </h4>
                                <div style="text-align:justify">{!! $item->about !!} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="welcome_image" style="padding-top: 25px;">
                            <img src="{{ asset('images/' . $item->image) }}" alt=" ">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
