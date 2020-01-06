<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom fonts for this template-->
    <link href="{{ asset("/vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset("/css/sb-admin-2.min.css") }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
            </div>
        </nav>
 <body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>

              <form method="POST" action="register">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="first_name" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="last_name" placeholder="Last Name" required="">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="birthdate">Birthdate:</label>
                    <input id="birthdate" name="dob" type="date" class="form-control datepicker" autocomplete="off" required="">
                  </div>
                  <div class="col-sm-6">
                    <label for="gender">Gender:</label><br>
                    <select name="gender" class="custom-select">
                      <option value=""></option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                  </div>
                </div>
                <div>
                  <select class="form-control" name="region" id="phregion" required="">
                    <option value="">Select Region</option>

                    @foreach ($phregions as $phregion) 
                    <option value="{{$phregion->region_code}}">
                     {{ $phregion->region_description }}
                   </option>
                   @endforeach
                 </select>

                 <select hidden="" class="form-control slcState" name="state" id="state" required="">
                 </select>

                 <select hidden="" class="form-control slcCity" name="city" id="city" required="">
                 </select>
               </div><br/>
               <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Register') }}
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="{{ url('login') }}">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset("/vendor/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset("/vendor/jquery-easing/jquery.easing.min.js") }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset("/js/sb-admin-2.min.js") }}"></script>
</body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">

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