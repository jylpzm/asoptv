
@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Song Entries</h1>
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
                        <th>No.</th>
                        <th>Song Title</th>
                        <th>Songwriter</th>
                        <th>Genre</th>
                        <th>Submission Date</th>
                        <th>Action</th>
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
        </div>
        <!-- /.row (main row) -->
  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
