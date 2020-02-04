
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


        <!-- Main row -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">

                  @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                      <p>{{ $message }}</p>
                    </div>
                  @endif

                  <br />
                    <br />
                      <button data-toggle="modal" data-target="#addAdmin" class="btn btn-primary" style="float: right;">New Admin Account</button>
                    <br />
                  <br />

                  <table class="table table-bordered table-striped" id="">
                    <thead>
                      <tr>
                        <th width = "100px">Icon</th>
                        <th width = "300px">Full Name</th>
                        <th width = "300px">Position</th>
                        <th width = "300px">Email Address</th>
                        <th width = "300px">Contact No.</th>
                        <th width = "100px">Action</th>
                      </tr>
                    </thead>

                  @foreach($admins as $admin)
                    <tr>
                      <td>{{$admin->admin_icon}}</td>
                      <td>{{$admin->full_name}}</td>
                      <td>{{$admin->admin_position}}</td>
                      <td>{{$admin->email_address}}</td>
                      <td>{{$admin->contact_num}}</td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Action<span class="caret"></span>
                          </button>
                          
                          <ul class="dropdown-menu">
                            <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#" onclick="">Edit</a></li>
                            <li><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#" onclick="">Remove</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  @endforeach

                  </table>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->

    <!-- Add Admin -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addAdmin">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add New Administrator</h4>
          </div>
            <form method="POST" action="{{ route('CreateAdministrator') }}" enctype="multipart/form-data">
              <div class="modal-body">
                @csrf

                <div class="form-group">                    
                  <label for="fullname">Full Name</label>                    
                  <input id="fullname" type="text" class="form-control" name="full_name" placeholder="Required"/>                        
                </div>

                <div class="form-group">                  
                  <label for="position">Position</label>
                    <select id="position" class="col-md-12" name="admin_position">
                      <option value="Standard Admin">Standard Admin</option>
                      <option value="Super Admin">Super Admin</option>
                    </select>                        
                </div>

                <div class="form-group">                    
                  <label for="email">Email Address</label>
                    <input id="email" type="text" class="form-control" name="email_address" placeholder="Required"/>
                </div>

                <div class="form-group">                    
                  <label for="contact">Contact No.</label>
                    <input id="contact" type="text" class="form-control" name="contact_num" placeholder="Required"/>
                </div>

                <div class="form-group">                    
                  <label for="icon">Icon (JPG and PNG only, small size)</label>
                    <div class="form-group" style="float: right;"> 
                      <img src="images/nopicture.jpg" alt="Loading.." width="80"/>
                      <input id="icon" type="file" name="admin_icon" size="20"/>
                    </div>
                </div>

                <div class="form-group">
                  <label for="password">Create Password</label>
                    <input id="password" type="text" class="form-control" name="admin_password" placeholder="Required"/>
                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
