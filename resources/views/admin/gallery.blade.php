@extends('layouts.adminLayout')
@section('content')
      <!-- partial -->

        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Photo</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Image Title">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Add Image</label>
                      <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Add file">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

        <!-- main-panel ends -->

      <!-- page-body-wrapper ends -->

    <!-- container-scroller -->
    <!-- base:js -->

    <div class="col-lg-14 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"></h4>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Image Title</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Title</td>
                    <td>Image</td>
                    <td><label class="badge badge-danger">Declined</label></td>
                    <td><label class="badge badge-success">Approved</label></td>
                  </tr>
                  <tr>
                    <tr>
                        <td>1</td>
                        <td>Title</td>
                        <td>Image</td>
                        <td><label class="badge badge-danger">Declined</label></td>
                        <td><label class="badge badge-success">Approved</label></td>
                      </tr>
                  </tr>
                  <tr>
                    <tr>
                        <td>1</td>
                        <td>Title</td>
                        <td>Image</td>
                        <td><label class="badge badge-danger">Declined</label></td>
                        <td><label class="badge badge-success">Approved</label></td>
                      </tr>
                  </tr>
                  <tr>
                    <tr>
                        <td>1</td>
                        <td>Title</td>
                        <td>Image</td>
                        <td><label class="badge badge-danger">Declined</label></td>
                        <td><label class="badge badge-success">Approved</label></td>
                      </tr>
                  </tr>
                  <tr>
                    <tr>
                        <td>1</td>
                        <td>Title</td>
                        <td>Image</td>
                        <td><label class="badge badge-danger">Declined</label></td>
                        <td><label class="badge badge-success">Approved</label></td>
                      </tr>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>


   @include('partials.footer')
  @endsection

