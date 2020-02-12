
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                  <!-- <br />
                      <br />
                          <a href="" class="btn btn-primary" style="float: right;"></a>
                      <br />
                  <br /> -->
                  <table class="table table-bordered table-striped" id="adminTable">
                    <thead>
                      <tr>
                        <th width = "30px">No.</th>
                        <th width = "180px">First Name</th>
                        <th width = "180px">Last Name</th>
                        <th width = "300px">Address</th>
                        <th width = "150px">Email Address</th>
                        <th width = "100px">Contact No.</th>
                        <th width = "100px">Action</th>
                      </tr>
                    </thead>

                    <?php $num = 1; ?>
                    @foreach($users as $user)
                      <tr>
                        <td>{{ $num++ }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->street_add }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->contact_num }}</td>
                        <td>
                          <div class="">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">View Details</button>
                          </div>
                        </td>
                      </tr>
                    @endforeach

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
