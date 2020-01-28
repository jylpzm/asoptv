
@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Songwriters</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


        <!-- Main row -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                  <!-- <br />
                      <br />
                          <a href="" class="btn btn-primary" style="float: right;"></a>
                      <br />
                  <br /> -->
                  <table class="table table-bordered table-striped" id="">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email Address</th>
                        <th>Contact No.</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
