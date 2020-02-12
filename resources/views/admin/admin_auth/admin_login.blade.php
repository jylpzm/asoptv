<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Log In</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-image: url('{{ asset('images/background.jpg')}}');background-position:center;background-size:cover">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin Log In</b></a>
  </div>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Log in to start your session</p>

      <form action="{{ route('AdminLoginSubmit') }}" method="post">
        @csrf
        
        <div class="input-group mb-3">
          <input id="email_address" type="email" class="form-control @error('email_address') is-invalid @enderror" name="email_address" value="{{ old('email_address') }}" aria-describedby="emailHelp" placeholder="Email">
            @error('email_address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="admin_password" type="password" class="form-control @error('admin_password') is-invalid @enderror" name="admin_password" placeholder="Password">
            @error('admin_password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="customCheck">
              <label for="customCheck">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <br/>
      <br/>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        Not a Super Admin? <a href="" class="text-center">Click here</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
