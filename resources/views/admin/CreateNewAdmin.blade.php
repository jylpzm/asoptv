
@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create New Admin Account</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="col-md-12">
            <form method="POST" action="">
                @csrf

                <div class="row">
                    <div class="col-md-3"><label>Full Name</label></div>
                    <div class="col-md-8">
                        <input id="" type="text" class="form-control" name="full_name" placeholder="Required"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-3"><label>Position</label></div>
                    <div class="col-md-8">
                        <select id="" class="col-md-12">
                            <option value="1">Standard Admin</option>
                            <option value="2">Super Admin</option>
                        </select> 
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-3"><label>Email Address</label></div>
                    <div class="col-md-8">
                        <input id="" type="text" class="form-control" name="email" placeholder="Required"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-3"><label>Contact No.</label></div>
                    <div class="col-md-8">
                        <input id="" type="text" class="form-control" name="contact" placeholder="Required"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-3"><label>Icon (JPG and PNG only, small size)</label></div>
                    <div class="col-md-3">
                        <img src="images/nopicture.jpg" alt="Loading.." width="100"/>
                        <input id="" type="file" name="icon" size="20"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-3"><label>Create Password</label></div>
                    <div class="col-md-8">
                        <input id="" type="text" class="form-control" name="password" placeholder="Required"/>
                    </div>
                </div>

                <br/>
                <br/>

                <div class="" style="float: right;">
                    <input type="submit" value="Add Admin" class="btn btn-primary"/>
                    <a type="submit" class="btn btn-danger" href="{{ route('ManageAdmins') }}">Cancel</a>
                </div>

                <br/>
                <br/>
            </form>
        </div>
    </div>
</div>

<!-- /.content-wrapper -->
@endsection
