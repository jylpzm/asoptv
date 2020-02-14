@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <section class="container-fluid col-md-11 card">
    <div class="row">

          <!-- <div class="card col-md-10"> -->
            <div class="col-md-6">
              <!-- <div class="card"> -->
                <div class="card-body">
                  <h1 class="card-title"><strong>Songwriter's Information</strong></h1><br/><br/>
                    <div class="card" style="height: 70px;">
                      <b>Name:</b>
                    </div>
                    <div class="card" style="height: 70px;">
                      <b>Songwriter's ID:</b>
                    </div>
                    <div class="card" style="height: 70px;">
                      <b>Gender:</b>
                    </div>
                    <div class="card" style="height: 70px;">
                      <b>Address:</b>
                    </div>
                    <div class="card" style="height: 70px;">
                      <b>Contact No.:</b>
                    </div>
                    <div class="card" style="height: 70px;">
                      <b>Email Address:</b>
                    </div>
                </div>
              <!-- </div> -->
            </div>

            <div class="col-md-6">
              <!-- <div class="card"> -->
                <div class="card-body">
                  <h1 class="card-title"><strong>Song Entry Information</strong></h1><br/><br/>
                    <div class="card" style="height: 70px;">
                      <b>Song Title:</b>
                    </div>
                    <div class="card" style="height: 70px;">
                      <b>Audio File:</b>
                    </div>
                    <div class="card" style="height: 70px;">
                      <b>Lyrics File:</b>
                    </div>
                    <div class="card" style="height: 240px;">
                      <b>Description:</b>
                    </div>
                </div>
              <!-- </div> -->
            </div>

            <div class="card-body">
              <button class="btn btn-primary" data-toggle="modal" data-target="#TakeAction">Take Action</button><br/>
            </div>
          <!-- </div> -->

    </div>

    <!-- Take Action Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="TakeAction">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Take Action</h4>
          </div>
          <form method="post" action="#" id="#">
          <div class="modal-body">

            <div class="form-group">
              <label>Choose your action</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Approved</option>
                  <option>For Revision</option>
                  <option>Denied</option>
                </select>
            </div>

            <div>
              <form>
                <textarea class="textarea" placeholder="Type your comments here.."
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
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