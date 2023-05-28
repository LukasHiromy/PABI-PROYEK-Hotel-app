@extends('admin.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Customer
                <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif

            @if (Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <form action="{{ url('admin/customer') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <table class="table table-bordered" >
                        <tr>
                            <th>Full Name<span class="text-danger">*</span></th>
                            <td><input name="full_name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Email<span class="text-danger">*</span></th>
                            <td><input name="email" type="email" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Password<span class="text-danger">*</span></th>
                            <td><input name="password" type="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Mobile<span class="text-danger">*</span></th>
                            <td><input name="mobile" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Photo</th>
                            <td><input name="photo" type="file" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><textarea name="address" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
 
@endsection