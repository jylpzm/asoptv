@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Administrators</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

                  @if(session()->has('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}
                    </div>
                  @endif

                  <br />
                    <br />
                      <a class="btn btn-primary" style="float: right;" href="{{ route('AddAdministrator') }}">New Admin Account</a>
                    <br />
                  <br />

                  <table class="table table-bordered table-striped" id="adminTable">
                    <thead>
                      <tr>
                        <th width = "30px">No.</th>
                        <th width = "100px">Icon</th>
                        <th width = "300px">Full Name</th>
                        <th width = "300px">Position</th>
                        <th width = "300px">Email Address</th>
                        <th width = "300px">Contact No.</th>
                        <th width = "100px">Action</th>
                      </tr>
                    </thead>

                  <?php $num = 1; ?>
                  @foreach($admins as $admin)
                    <tr>
                      <td>{{$num++}}</td>
                      <td><img src="/storage/admin/{{ $admin->admin_icon }}" class="img-thumbnail" width="80"></td>
                      <td>{{$admin->full_name}}</td>
                      <td>{{$admin->admin_position}}</td>
                      <td>{{$admin->email_address}}</td>
                      <td>{{$admin->contact_num}}</td>
                      <td>
                        <div class="">
                          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action</button>
                          
                          <ul class="dropdown-menu">
                            <li><a type="button" class="btn btn-primary" onclick="">Edit</a></li>
                            <li><a type="button" class="btn btn-danger" onclick="">Remove</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  @endforeach

                  </table>
            </div>
          </div>
        </div><!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section><!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
