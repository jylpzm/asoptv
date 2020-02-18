@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Song Genres</h1>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section>
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
                    <button class="btn btn-primary" data-toggle="modal" data-target="#AddGenre" style="float: right;">Add New Genre</button>
                <br />
            <br />
            <table class="table table-bordered table-striped" id="adminTable">
              <thead>
                <tr>
                  <th width = "50px">No.</th>
                  <th width = "150px">Genre</th>
                  <th width = "500px">Description</th>
                  <th width = "100px">Action</th>
                </tr>
              </thead>

              <?php $num = 1; ?>
              @foreach($genre as $row)
                <tr>
                  <td>{{ $num++ }}</td>
                  <td><b>{{ $row->genre }}</b></td>
                  <td>{{ $row->description }}</td>
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

    <!-- Add Genre Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="AddGenre">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Take Action</h4>
          </div>

          <form action="{{ route('CreateGenre') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="container-fluid">

                <div class="form-group">                    
                  <label for="genre">Genre</label>                    
                  <input id="genre" type="text" class="form-control" name="genre" placeholder="Genre"/>                        
                </div>

                </br>

                <div class="form-group">                    
                  <label for="description">Description</label>
                    <textarea id="description" type="textarea" class="form-control" name="description" placeholder="Type your comments here.."
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </section>
</div>

@endsection