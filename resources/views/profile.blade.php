@extends('layouts.app')

@section('content')

<head>
  <title></title>
 {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
{{--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
  <style type="text/css">
    .img-circle {
      border-radius: 50%;
    }
    .img-thumbnail {
      display: inline-block;
      max-width: 100%;
      height: auto;
      padding: 4px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
    </style>
</head>

@foreach($errors->all() as $error)
<div class="alert alert-danger col-md-6 offset-md-3" role="alert">
  {{ $error }}
</div>
@endforeach
@if (session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif

<hr>
<div class="container bootstrap snippet">
    <div class="form-group row">
      <div class="col-sm-10"><h1>{{ Auth::user()->user_id }}</h1></div>
    </div>
    <div class="row">
         <div class="col-sm-3"><!--left col-->
              <div class="text-center">

        <form method="POST" action="{{ route('changeDP') }}" enctype="multipart/form-data">
          @csrf
          <img src="{{ !empty(Auth::user()->avatar) ? url("/storage/avatars/".Auth::user()->avatar) : url("/images/default.jpg") }}" class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Upload your 2x2 picture here!</h6>
            <input type="file" class="text-center center-block file-upload" name="avatar" required="">
          <div class="col-sm-20 mb-3 mb-sm-0">
            <br>
            <div class="col-sm-6">
              <button class="btn btn-xs btn-success" type="submit">SaveProfilePicture</button>
            </div>
          </div>
            </div></hr><br>
        </form>

    <form method="POST" action="{{ route('changeprofile') }}">
          @csrf

        </div><!--/col-3-->
      <div class="col-sm-9">

        <div class="form-group row">
                  <input type="text" name="user_id" value="{{ Auth::user()->user_id }}" hidden="">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="firstname">First Name</label><br>
                    <input name="first_name" id="firstname" type="text" class="form-control form-control-   user" value="{{ Auth::user()->first_name }}" disabled="">
                  </div>
                  <div class="col-sm-6">
                    <label for="lastname">Last Name</label><br>
                    <input name="last_name" id="lastname" type="text" class="form-control form-control-user" value="{{ Auth::user()->last_name }}" disabled="">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="email">Email Address</label><br>
                    <input class="form-control form-control-user" value="{{ Auth::user()->email }}" disabled="" readonly="readonly">
                  </div>
                  <div class="col-sm-6">
                    <label for="phonenumber">Phone Number</label><br>
                    <input name="contact_num" type="text" class="form-control form-control-user" id="contact_num" disabled="" placeholder="Put Your Contact Number Here" value="{{ Auth::user()->contact_num }}" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="birthdate">Birthdate:</label>
                    <input id="birthdate" name="dob" type="date" class="form-control datepicker" autocomplete="off" value="{{ Auth::user()->dob }}" disabled="">
                  </div>
                  <div class="col-sm-6">
                    <label for="gender">Gender:</label><br>
                    <select name="gender" id="gender" class="custom-select" disabled="">
                      <option value="">{{ Auth::user()->gender }}</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="street">Street Address</label><br>
                    <input name="street_add" id="streetadd" type="text" class="form-control form-control-user"  placeholder="Put Your Complete Address here" disabled="" value="{{ Auth::user()->street_add }}">
                </div>
                <div>
                  <select class="form-control" name="phregion" id="phregion" disabled="">
                    <option value="">{{ Auth::user()->region }}</option>
                 </select>

                 <select class="form-control slcState" name="state" id="state" disabled="">
                 </select>
                 <select class="form-control slcCity" name="city" id="city" disabled="">
                 </select>
               </div><br/>
                </a>
                <div class="form-group">
                 <div class="col-xs-12">
                  <button class="btn btn-lg btn-success" type="submit" id="saveBtn" hidden=""><i class="glyphicon glyphicon-ok-sign"></i> Save</button> 
                  <button class="btn btn-lg btn" type="button" id="cancelBtn" hidden=""><i class="glyphicon glyphicon-ok-sign"></i> Cancel</button>
                  <button class="btn btn-primary" type="button" id="editBtn">edit</button>
                </div>
              </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



@endsection

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
 
 $(document).ready(function(){
  $("#editBtn").click(function(){
    console.log('wew')
    $('#firstname').attr('disabled', false)
    $('#lastname').attr('disabled', false)
    $('#contact_num').attr('disabled', false)
    $('#gender').attr('disabled', false)
    $('#birthdate').attr('disabled', false)
    $('#streetadd').attr('disabled', false)
    $('#saveBtn').attr('hidden', false)
    $('#cancelBtn').attr('hidden', false)
    $('#editBtn').attr('hidden', true)
  });
  $("#cancelBtn").click(function(){
    $('#firstname').attr('disabled', true)
    $('#lastname').attr('disabled', true)
    $('#contact_num').attr('disabled', true)
    $('#gender').attr('disabled', true)
    $('#birthdate').attr('disabled', true)
    $('#streetadd').attr('disabled', true)
    $('#saveBtn').attr('hidden', true)
    $('#cancelBtn').attr('hidden', true)
    $('#editBtn').attr('hidden', false)
  });
});

</script>