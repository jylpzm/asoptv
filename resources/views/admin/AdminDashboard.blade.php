@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Dashboard</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Entries</p>
              </div>
              <div class="icon">
                <i class="ion ion-email"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Annual Entry Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Pending Applications</p>
              </div>
              <div class="icon">
                <i class="ion ion-social-buffer"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="container-fluid">
          <h2 class="m-0 text-dark">Song Entry Details</h2><br/>
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
                          <th width = "180px">Song Title</th>
                          <th width = "80px">Genre</th>
                          <th width = "120px">Submission Date</th>
                          <th width = "100px">Action</th>
                        </tr>
                      </thead>

                      <?php $num = 1; ?>
                      @foreach($newEntries as $row)
                        <tr>
                          <td>{{ $num++ }}</td>
                          <td>{{ $row->first_name }}</td>
                          <td>{{ $row->last_name }}</td>
                          <td>{{ $row->song_title }}</td>
                          <td>{{ $row->song_genre }}</td>
                          <td>{{ $row->created_at }}</td>
                          <td>
                            <div class="">
                              <button type="button" class="btn btn-primary">View Details</button>
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
  </div><!-- /.content-wrapper -->

@endsection
