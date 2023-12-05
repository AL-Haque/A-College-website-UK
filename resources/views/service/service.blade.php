@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    <!-- partial -->
    @include('errors')
    @include('massage')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Service Information</h4>
                        <form class="forms-sample" method="POST" action=" {{ route('service.store', '$served->id') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:40%; padding-top:.6rem">
                                    <p> Name</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Service Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:40%; padding-top:.6rem">
                                    <p>Short Description</p>
                                </div>
                                <div class="col-sm-6">
                                    <textarea name="details" class="form-control" id="editor"  style="padding:.500rem"rows="4" cols="50"
                                        placeholder="Enter Short Description"></textarea>
                                    <br>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width:40%; padding-top:.6rem">
                                <p>Description</p>
                            </div>
                            <div class="col-sm-6">
                                <textarea name="description" class="form-control" id="editor"  style="padding: .500rem" rows="4" cols="50"
                                    placeholder="Enter Short Description"></textarea>
                                <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width:40%; padding-top:.6rem">
                                <p>Image</p>
                            </div>

                            <div class="col-sm-6">
                                <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                            </div>
                        </div>
                        <img id="img-preview" src="{{ asset('images/noimage.jpg') }}" width="220rem" height="150rem" />

                    </div>
                </div>

            </div>
            <div class="col-md-12 mb-6" style="padding-bottom: 5rem">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </div>
            <form>
        </div>



        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Service List</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($service as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->details }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td><img src="{{ asset('images/' . $item->image) }}" alt=""></td>
                                        <td> <a href="{{ route('service.edit', $item->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                    <path
                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                </svg> </a>
                                            <a href="{{ route('service.delete', $item->id) }}"  onclick=" return confirm('Are You Sure!')"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                </svg></label>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $service->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- <i class="fa-brands fa-slack"></i> --}}
        <!-- content-wrapper ends -->

        <!-- main-panel ends -->

        <!-- page-body-wrapper ends -->

        <!-- container-scroller -->
        <!-- base:js -->

        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>


        @push('admin-js')
            <script>
                let noimage =
                    "https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

                function readURL(input) {
                    console.log(input.files);
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("#img-preview").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    } else {
                        $("#img-preview").attr("src", noimage);
                    }
                }
            </script>
        @endpush
    @endsection
