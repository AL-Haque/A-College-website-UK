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
                        <h4 class="card-title">Photo Information</h4>

                        <form class="forms-sample" method="POST" action="{{route('photo.update',$photo->id)}}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            {{-- <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:10px">
                                    <p>Image</p>
                                </div>
                                <div class="col-sm-6">
                                <input type="file" name="image" value="" class="form-control"
                                    style="padding: .500rem" id="exampleInputUsername1" placeholder="Add file">
                            </div>
                        </div> --}}

                            <div class="form-group">
                                <div class="form-check mb-2">
                                    <label for="file">Photo</label><br>
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                </div>
                                <img id="img-preview" src="{{ asset('images/'.$photo->image) }}" width="220px"
                                    height="150px" />
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>

            </div>




            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Photo List</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($photos as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('images/'.$item->image) }}" alt="Image"></td>
                                            <td>{{ $item->created_at }}</td>
                                            <td> <a href="{{ route('photo.edit', $item->id) }}"><i class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('photo.delete', $item->id) }}"  onclick=" return confirm('Are You Sure!') "><i class="fa-solid fa-trash"></i></label></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $photos->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
