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
                <i class="ion ion-bag"></i>
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
                <i class="ion ion-pie-graph"></i>
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
                          <th width = "50px">No.</th>
                          <th width = "300px">Name</th>
                          <th width = "300px">Song Title</th>
                          <th width = "120px">Genre</th>
                          <th width = "200px">Submission Date</th>
                          <th width = "100px">Action</th>
                        </tr>
                      </thead>

                      <?php $num = 1; ?>
                      @foreach($songs as $song)
                        <tr>
                          <td>{{$num++}}</td>
                          <td>{{$song->song_title}}</td>
                          <td>{{$song->song_genre}}</td>
                          <!-- <td>{{$song->song_position}}</td>
                          <td>{{$song->email_address}}</td>
                          <td>{{$song->contact_num}}</td> -->
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
  </div><!-- /.content-wrapper -->

@endsection
