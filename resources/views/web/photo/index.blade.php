@extends('web.web_master')
@section('web-master')



    <div class="main__container">


 <!-- our photo gallery start -->

 <div class="container-fluid cc-footer-container">
    <div class="page-header" style="padding-top:30px; padding-bottom:0%;">
        <h1 style="border-bottom:1px solid black"> Photo Gallery </h1>
    </div>

        <h5 style="text-align:center; padding-bottom:30px"> A bunch of cool photos of our Campus.</h5>

    <div class="row">
     @foreach ( $photoGallery as  $item)
            <div class="col-md-6 col-lg-3 text-center mb-4 ">
                <div class="card " style="border-radius: 5px">
                    <div class="card-body pd-2">
                    <a href="" class="image-hover gallery" title="Gallery"
                        data-fancybox="gallery" data-caption="Gallery">
                        <div class="card-img-top  d-md-block">
                            <img class="img-fluid" style="height:250px;" src="{{ asset('images/'.$item->image) }} "
                                alt=" ">
                        </div>

                    </a>
                </div>
            </div>
            </div>
            @endforeach

    </div>
</div>
<!-- our photo gallery end -->

    </div>



        <!-- our speciality end -->




    @endsection
