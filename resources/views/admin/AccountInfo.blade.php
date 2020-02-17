@extends('admin/admin_layouts.admin_app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Songwriter's Information</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">
body{
  background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
/*.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}*/
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<section class="container">
  <div class="container emp-profile">
  @csrf

  @foreach($songentries as $songentry)
    <!-- <form method="post"> -->
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="{{ !empty(Auth::user()->avatar) ? url("/storage/avatars/".Auth::user()->avatar) : url("/images/default.jpg") }}" class="avatar img-circle img-thumbnail" alt="avatar"></img>
                    <!-- <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h1>
                                {{ $songentry->first_name ." ". $songentry->last_name }}
                            </h1>
                            <h6>
                                {{ $songentry->email }}
                            </h6>
                            <br/>
                            <br/>
                            <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Submissions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div> -->
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link</a><br/>
                    <a href="">Bootsnipp Profile</a><br/>
                    <a href="">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br/>
                    <a href="">Web Developer</a><br/>
                    <a href="">WordPress</a><br/>
                    <a href="">WooCommerce</a><br/>
                    <a href="">PHP, .Net</a><br/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $songentry->song_id}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $songentry->first_name ." ". $songentry->last_name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $songentry->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $songentry->contact_num }}</p>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Web Developer and Designer</p>
                                    </div>
                                </div> -->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Song Title</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $songentry->song_title }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Audio</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><audio controls src="/storage/audio/{{ $songentry->audio_file }}"></audio></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Lyrics</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p><a href="/storage/lyrics/{{ $songentry->lyrics_file }}">{{ $songentry->song_title }}</a></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Notes</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $songentry->notes }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $songentry->status }}</p>
                                    </div>
                                </div>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br/>
                                <p>Your detail description</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    <!-- </form> -->
  @php
    $status = $songentry->status;
  @endphp
    @if($status == 1 or $status == 0)
    <div class="card-body">
      <button class="btn btn-primary" data-toggle="modal" data-target="#TakeAction">Take Action</button><br/>
    </div>
    @endif
  @endforeach
  </div>

  <!-- Take Action Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="TakeAction">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Take Action</h4>
        </div>
        @foreach($songentries as $songentry)

        <form action="{{ route('ManageSongEntries') }}" method="POST" enctype="multipart/form-data">
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

@endsection