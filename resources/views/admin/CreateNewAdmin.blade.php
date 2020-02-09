@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create New Administrators</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <form method="POST" action="{{ route('CreateAdministrator') }}" enctype="multipart/form-data">
          <!-- Main row -->
          <div class="col-md-12">

              @csrf
              <div class="form-group">                    
                <label for="fullname">Full Name</label>                    
                <input id="fullname" type="text" class="form-control" name="full_name" placeholder="Required"/>                        
              </div>

              </br>

              <div class="form-group">                  
                <label for="position">Position</label>
                  <select id="position" class="col-md-12" name="admin_position">
                    <option value="Standard Admin">Standard Admin</option>
                    <option value="Super Admin">Super Admin</option>
                  </select>                        
              </div>

              </br>

              <div class="form-group">                    
                <label for="email">Email Address</label>
                  <input id="email" type="text" class="form-control" name="email_address" placeholder="Required"/>
              </div>

              </br>

              <div class="form-group">                    
                <label for="contact">Contact No.</label>
                  <input id="contact" type="text" class="form-control" name="contact_num" placeholder="Required"/>
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
                  <input id="password" type="text" class="form-control" name="admin_password" placeholder="Required"/>
              </div>

              </br>

              <div class="button-group" style="float: right;">
                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('ManageAdmins') }}">Cancel</a>
              </div>

          </div><!-- /.row (main row) -->
        </form>
      </div><!-- /.container-fluid -->
    </section><!-- /.content -->

  </div><!-- /.content-wrapper -->
@endsection
