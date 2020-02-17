@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Support Administrators</h1>
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
                    <a class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#AddAdmin">Add Support Admin</a>
                  <br />
                <br />

                <table class="table table-bordered table-striped" id="adminTable">
                  <thead>
                    <tr>
                      <th width = "30px">No.</th>
                      <th width = "100px">Icon</th>
                      <th width = "300px">Full Name</th>
                      <!-- <th width = "300px">Position</th> -->
                      <th width = "300px">Email Address</th>
                      <th width = "300px">Contact No.</th>
                      <th width = "100px">Action</th>
                    </tr>
                  </thead>

                <?php $num = 1; ?>
                @foreach($admins as $row)
                  <tr>
                    <td>{{ $num++ }}</td>
                    <td><img src="/storage/admin/{{ $row->admin_icon }}" class="img-thumbnail" width="80"></td>
                    <td>{{ $row->full_name }}</td>
                    <!-- <td>{{ $row->admin_position }}</td> -->
                    <td>{{ $row->email_address }}</td>
                    <td>{{ $row->contact_num }}</td>
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

    <!-- Take Action Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="AddAdmin">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Support Admin</h4>
          </div>
            <form method="POST" action="{{ route('CreateAdministrator') }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="form-group">                    
                    <label for="fullname">Full Name</label>                    
                    <input id="fullname" type="text" class="form-control" name="full_name" placeholder="Full Name"/>                        
                  </div>

                  </br>

                  <div class="form-group">                    
                    <label for="email">Email Address</label>
                      <input id="email" type="text" class="form-control" name="email_address" placeholder="Email"/>
                  </div>

                  </br>

                  <div class="form-group">                    
                    <label for="contact">Contact No.</label>
                      <input id="contact" type="text" class="form-control" name="contact_num" placeholder="Contact No."/>
                  </div>

                  </br>

                  <div class="form-group">                    
                    <label for="icon">Icon (JPG and PNG only, small size)</label>
                      <div class="form-group"> 
                        <img src="images/nopicture.jpg" alt="Loading.." width="100"/>
                        <input id="icon" type="file" name="admin_icon" size="50"/>
                      </div>
                  </div>

                  </br>

                  <div class="form-group">
                    <label for="password">Create Password</label>
                      <input id="password" type="text" class="form-control" name="admin_password" placeholder="Password"/>
                  </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add Admin</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection
