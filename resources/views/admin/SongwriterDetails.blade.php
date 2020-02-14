@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
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
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    @foreach($songentries as $songentry)

                    
                    <label for="firstname">Full Name:</label><br>
                    {{ $songentry->first_name ." ". $songentry->last_name }}

                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <br><label for="firstname">Gender:</label><br>
                    <input name="first_name" id="firstname" type="text" class="form-control form-control-user" value="" disabled="">
                  </div>
                    <div>
                      <b>Gender:</b>
                    </div>
                    <div>
                      <b>Address:</b>
                    </div>
                    <div>
                      <b>Contact No.:</b>
                    </div>
                    <div>
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
            @php
            $status = $songentry->status;
            @endphp
            @if($status == 1 or $status == 0)
            <div class="card-body">
              <button class="btn btn-primary" data-toggle="modal" data-target="#TakeAction">Take Action</button><br/>
            </div>
            @endif
            @endforeach
          <!-- </div> -->

    </div>

    <!-- Take Action Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="TakeAction">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Take Action</h4>
          </div>
          @foreach($songentries as $songentry)

          <form action="/approval_entry/{{ $songentry->song_id }}" method="POST" id="#">
            @csrf
            
          <div class="modal-body">
            <div class="form-group">
              
              <label>Choose your action</label>
                  @if($status == 0)
                <select name="status" class="form-control select2" style="width: 100%;">
                  <option value="1" selected="selected">For Processing</option>
                  <option value="2">Approved</option>
                  <option value="3">Denied</option>
                  </select>
                  @elseif($status == 1)
                <select name="status" class="form-control select2" style="width: 100%;">
                  <option value="2" selected="selected">Approved</option>
                  <option value="3">Denied</option>
                  @endif
                </select>
            </div>
            <div>
              
                <textarea class="textarea" placeholder="Type your comments here.."
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
          @endforeach
          </form>
        </div>
      </div>
    </div>

  </section>
</div>

@endsection