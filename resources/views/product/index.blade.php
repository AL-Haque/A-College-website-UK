@extends('layouts.adminLayout')
@section('content')
    @include('errors')
    <div class="content-wrapper">
        <h2 class="card-title">Upload Product Information</h2>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">


                        <form class="forms-sample" method="POST" action="{{ route('product.store', $pro->id) }} "
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:10px">
                                    <p>Name</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" style="padding: .500rem"
                                        placeholder="Enter Product Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:10px">
                                    <p>Category</p>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="category_id"
                                        style="padding: .500rem"id="exampleInputUsername1">
                                        <option selected>Select Product Category</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:20%;">
                                    <p>Sub-Category</p>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="sub_id" id="exampleInputUsername1">
                                        <option selected> Select Product Sub-Category</option>
                                        @foreach ($subcategory as $item)
                                            <option value="{{ $item->id }}">{{ $item->sub_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:20px">
                                    <p>Description</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="description" class="mt-2"></label>
                                        <textarea class="form-control form-control-sm" name="description" style="padding: .500rem" name="description"
                                            id="editor" cols="20" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-3" style="max-width: 20%;">
                                <p>Image</p>
                            </div>

                            <div class="col-sm-6">
                                <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                            </div>
                        </div>
                        <img id="img-preview" src="{{ asset('images/noimage.jpg') }}" width="220px" height="150px" />

                    </div>
                </div>
            </div>
        </div>
        <div class="btn" style="padding-top: 30px; padding-left:0%">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>
        </form>

        <!-- content-wrapper ends -->

        <!-- main-panel ends -->

        <div class="col-lg-16 grid-margin stretch-card" style="padding-top: 2.5rem">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Slider List</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Category ID</th>
                                    <th>Sub Category Id</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td> {{ $item->category_id }}</td>
                                        <td> {{ $item->sub_id }}</td>
                                        <td> {{ $item->description }}</td>
                                        <td><img src="{{ asset('images/' . $item->image) }}" alt=""></td>
                                        <td>Image</td>

                                        <td> <a href="{{ route('product.edit', $item->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                    <path
                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                </svg> </a></td>
                                        <td><a href="{{route('product.delete')}}"  onclick=" return confirm('Are You Sure!') "><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                </svg></label></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>



        <!-- base:js -->
        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endsection


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