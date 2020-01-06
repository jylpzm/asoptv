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

<hr>
<div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-10"><h1>{{ Auth::user()->user_id }}</h1></div>
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->

    <form method="POST" action="/updateprofile/{{ Auth::user()->id }}" enctype="multipart/form-data">
          @csrf
    <div class="text-center">
        <img src="{{ asset(Auth::user()->avatar) }}" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload your 2x2 picture here!</h6>
        <input type="file" class="text-center center-block file-upload" name="avatar">
      </div></hr><br>
        </div><!--/col-3-->
      <div class="col-sm-9">
        <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="firstname">First Name</label><br>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" value="{{ Auth::user()->first_name }}">
                  </div>
                  <div class="col-sm-6">
                    <label for="lastname">Last Name</label><br>
                    <input type="text" class="form-control form-control-user" id="exampleLastName">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="email">Email Address</label><br>
                    <input type="text" class="form-control form-control-user" id="email" value="{{ Auth::user()->email }}" disabled="">
                  </div>
                  <div class="col-sm-6">
                    <label for="phonenumber">Phone Number</label><br>
                    <input type="text" class="form-control form-control-user" id="contact_num">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="birthdate">Birthdate:</label>
                    <input id="birthdate" name="dob" type="date" class="form-control datepicker" autocomplete="off" >
                  </div>
                  <div class="col-sm-6">
                    <label for="gender">Gender:</label><br>
                    <select class="custom-select">
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="street">Street Address</label><br>
                    <input type="text" class="form-control form-control-user" id="street" placeholder="Put Your Complete Address here">
                </div>
                <div>
                  <select class="form-control" name="phregion" id="phregion">
                    <option value="">Select Region</option>
                 
                    @foreach ($phregions as $phregion) 
                    <option value="{{$phregion->region_code}}">
                     {{ $phregion->region_description }}
                   </option>
                   @endforeach
                 </select>

                 <select class="form-control slcState" name="state" id="state">
                 </select>
                 <select class="form-control slcCity" name="city" id="city">
                 </select>
               </div><br/>
                </a>
                <div class="form-group">
                 <div class="col-xs-12">
                  <br>
                  <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
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

   $('#phregion').change(function(){
    console.log('wew')
    var cid = $(this).val();
    if(cid){
      $.ajax({
        type:"get",
        url:"/getStates/"+cid, 
        success:function(res)
        {       
          if(res)
          {
            $('#state').attr('hidden', false)
            $("#state").empty();
            $("#city").empty();
            $("#state").append('<option>Select Province</option>');
            $.each(res,function(key,value){
              $("#state").append('<option value="'+key+'">'+value+'</option>');
            });
          }
        }

      });
    }
  });

$('#state').change(function(){
        var sid = $(this).val();
        if(sid){
            $.ajax({
             type:"get",
           url:"/getCities/"+sid, 
           success:function(res)
           {       
            if(res)
            {
                $('#city').attr('hidden', false)
                $("#city").empty();
                $("#city").append('<option>Select City</option>');
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
            }
        }

    });
        }
    }); 
</script>