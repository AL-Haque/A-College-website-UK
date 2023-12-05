
@extends('layouts.adminLayout')
@section('content')
@include('errors')
<div class="content-wrapper">
    <h2 class="card-title">Upload Company Information</h2>

    <div class="row">
        <div class="col-sm-6">
        <div class="card">
          <div class="card-body">

            <form class="forms-sample" method="POST" action=" " enctype="multipart/form-data">
                {{csrf_field()}}
              <div class="form-group row">
                <div class="col-sm-9" >
                    <p> Name</p>
                  <input type="text" name="name"  class="form-control"  style="padding: .500rem"  placeholder="Username">
                </div>
              </div>

              <div class="form-group row">

                <div class="col-sm-9">
                    <p> Email</p>
                  <input type="email" name="email"   class="form-control"  style="padding: .500rem" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-9">
                    <p> Facebook</p>
                  <input type="text" name="facebook"  class="form-control"  style="padding: .500rem"  placeholder="Facebook">
                </div>
              </div>


              <div class="form-group row">
                <div class="col-sm-9">
                    <p> Add Logo</p>
                  <input type="file" name="logo" class="form-control"   style="padding: .500rem" placeholder="Add Logo">
                </div>
              </div>





          </div>
      </div>




    </div>



    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">




            {{-- <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"> </i>
              </span>
            </div> --}}


            <div class="form-group row">
                <div class="col-sm-9">
                    <p> Add Image</p>
                  <input type="file" name="image"   class="form-control"  placeholder="Add Image">
                </div>
              </div>


            <div class="form-group row">
                <div class="col-sm-9">
                    <p> Instragram</p>
                  <input type="text" name="instragram"    class="form-control"   placeholder="Instragram">
                </div>
              </div>


              <div class="form-group row">
                <div class="col-sm-9">
                    <p> LinkdIn</p>
                  <input type="text" name="linkdln" value="{{$edit->name}}"   class="form-control"   style="padding: .500rem" placeholder="LinkdIn">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-9">
                    <p> Twitter</p>
                  <input type="text" name="twitter"  value="{{$edit->id}}"   class="form-control"  style="padding: .500rem"  placeholder="Twitter">
                </div>
              </div>
          </div>
        </div>
      </div>

    </div>


    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>


</form>

  <!-- content-wrapper ends -->

<!-- main-panel ends -->



    </div>
  </div>
</div>
</div>
</div>

<!-- base:js -->

@endsection
