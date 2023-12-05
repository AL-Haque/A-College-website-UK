@extends('layouts.adminLayout')
@section('content')
    @include('errors')
    @include('massage')
    @include('admin.Alert')
    <div class="content-wrapper">
        <h2 class="card-title">Employee Information</h2>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">


                        <form class="forms-sample" method="POST" action=" {{ route('employee.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:40%; padding-top:.6rem">
                                    <p>Department</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="employee_id" class="form-control" style="padding: .500rem"
                                        placeholder="Department">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:40%; padding-top:10px">
                                    <p>Name</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" style="padding: .500rem"
                                        placeholder="Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:40%; padding-top:10px">
                                    <p>Email</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" style="padding: .500rem"
                                        placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:40%;">
                                    <p>Present Address</p>
                                </div>
                                <div class="col-sm-6" >
                                    <input type="text" name="present" class="form-control" style="padding: .500rem"
                                        placeholder="Present Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:40%;">
                                    <p>Permanent Address</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="permanent" class="form-control" style="padding: .500rem"
                                        placeholder="Permanent Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:40%; padding-top:10px">
                                    <p>Phone Number</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" name="phone" class="form-control" style="padding: .500rem"
                                        placeholder="Phone No">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width:40%; padding-top:10px ">
                                <p>Designation</p>
                            </div>
                            <div class="col-sm-6">
                                <input type="tel" name="designation" class="form-control" style="padding: .500rem"
                                    placeholder="Designation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width:40%; padding-top:10px">
                                <p>Facebook</p>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="facebook" class="form-control" style="padding: .500rem"
                                    placeholder="Facebook">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width:40%; padding-top:10px">
                                <p>LinkdIn</p>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="linkdIn" class="form-control" style="padding: .50rem"
                                    placeholder="LinkdIn">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width: 40%;">
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



    </div>
    <!-- content-wrapper ends -->

    <!-- main-panel ends -->

    <div class="content-wrapper">
        <div class="col-lg-14 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Employee Information</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Employee Id</th>
                                    <th>Email</th>
                                    <th>Present Address</th>
                                    <th>Permanent Address</th>
                                    <th>Phone No</th>
                                    <th>Designation</th>
                                    <th>Facebook</th>
                                    <th>Linkdin</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($employee as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->employee_id }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->present }}</td>
                                        <td>{{ $item->permanent }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->designation }}</td>
                                        <td>{{ $item->facebook }}</td>
                                        <td>{{ $item->linkdIn }}</td>
                                        <td><img src="{{ asset('images/' . $item->image) }}" alt=""></td>
                                        <td> <a href="{{ route('employee.edit', $item->id) }}"><i class="fa-solid fa-pen"></i> </a></td>
                                        <td><a href="{{ route('employee.delete', $item->id) }} "  onclick=" return confirm('Are You Sure!') "><i class="fa-solid fa-trash"></i></label></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $employee->withQueryString()->links('pagination::bootstrap-5') !!}
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
    </script>
@endpush
