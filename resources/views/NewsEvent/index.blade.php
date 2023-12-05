@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    @include('errors')
    @include('massage')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">News- Events Information</h2>
                        <form class="forms-sample" method="POST" action="{{ route('news_event.store') }} "
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 25%; padding-top:10px">
                                    <p> Name</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="news_title" class="form-control" style="padding: .500rem"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-3" style="max-width: 25%; padding-top:10px">
                                    <p> Event Details</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="news_details" class="form-control" style="padding: .500rem"
                                        placeholder="Details">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 25%; padding-top:20px">
                                    <p>Description</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="description" class="mt-2"></label>
                                        <textarea class="form-control form-control-sm" name="news_description" style="padding: .500rem" name="description"
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
                            <div class="col-sm-3" style="max-width: 25%;">
                                <p>Image</p>
                            </div>
                            <div class="col-sm-6">
                                <input type="file" name="news_image" accept="image/*" onchange="readURL(this)" />
                            </div>
                        </div>
                        <img id="img-preview" src="{{ asset('images/noimage.jpg') }}" width="250rem" height="180rem" />
                    </div>
                </div>
            </div>
        </div>

            <div class="form-group row">
                <div class="col-sm-12" style="padding-top:2rem;padding-left:2rem">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">News Events Information</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>News title</th>
                                            <th>News details</th>
                                            <th>News description</th>
                                            <th>News image </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($newsEvent as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->news_title }}</td>
                                                <td>{{ $item->news_details }}</td>
                                                <td>{!! $item->news_description !!}</td>
                                                <td><img src="{{ asset($item->news_image) }}"></td>
                                                <td> <a href="{{ route('news_event.edit', $item->id) }}"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                            <path
                                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                        </svg> </a></td>
                                                <td> <a href="{{ route('news_event.delete', $item->id) }}"  onclick=" return confirm('Are You Sure!')"><svg
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
                                {!! $newsEvent->withQueryString()->links('pagination::bootstrap-5') !!}
                            </div>


                        </div>

                    </div>

                </div>
            </div>

            <!-- base:js -->
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


                function readURL2(input) {
                    console.log(input.files);
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("#img-preview2").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    } else {
                        $("#img-preview2").attr("src", noimage);
                    }
                }
            </script>


            <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        @endpush
