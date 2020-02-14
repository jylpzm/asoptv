<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
  	
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

	<!-- iCheck -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

	<!-- JQVMap -->
	{{-- <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}"> --}}

	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">

	<!-- summernote -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.css')}}">

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}">

	<!-- Ionicons -->
	{{-- <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}"> --}}

	<!-- DataTables -->
	<link href="{{ asset("/vendor/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet">

	<!-- AdminLTE Skins -->
	<link rel="stylesheet" href="{{asset('adminlte/dist/css/skins/_all-skins.min.css')}}">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-dark navbar-cyan">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
		<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

	SEARCH FORM
	<form class="form-inline ml-3">
		<div class="input-group input-group-sm">
		<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
		<div class="input-group-append">
			<button class="btn btn-navbar" type="submit">
			<i class="fas fa-search"></i>
			</button>
		</div>
		</div>
	</form>


	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Messages Dropdown Menu -->
		<li class="nav-item dropdown">
		<a class="nav-link" data-toggle="dropdown" href="#">
			<i class="far fa-comments"></i>
			<span class="badge badge-danger navbar-badge">3</span>
		</a>
		<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			<a href="#" class="dropdown-item">
			<!-- Message Start -->
			<div class="media">
				<img src="images/nopicture.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
				<div class="media-body">
				<h3 class="dropdown-item-title">
					Brad Diesel
					<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
				</h3>
				<p class="text-sm">Call me whenever you can...</p>
				<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
				</div>
			</div>
			<!-- Message End -->
			</a>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item">
			<!-- Message Start -->
			<div class="media">
				<img src="images/nopicture.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
				<div class="media-body">
				<h3 class="dropdown-item-title">
					John Pierce
					<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
				</h3>
				<p class="text-sm">I got your message bro</p>
				<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
				</div>
			</div>
			<!-- Message End -->
			</a>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item">
			<!-- Message Start -->
			<div class="media">
				<img src="images/nopicture.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
				<div class="media-body">
				<h3 class="dropdown-item-title">
					Nora Silvester
					<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
				</h3>
				<p class="text-sm">The subject goes here</p>
				<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
				</div>
			</div>
			<!-- Message End -->
			</a>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
		</div>
		</li>
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
		<a class="nav-link" data-toggle="dropdown" href="#">
			<i class="far fa-bell"></i>
			<span class="badge badge-warning navbar-badge">15</span>
		</a>
		<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			<span class="dropdown-item dropdown-header">15 Notifications</span>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item">
			<i class="fas fa-envelope mr-2"></i> 4 new messages
			<span class="float-right text-muted text-sm">3 mins</span>
			</a>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item">
			<i class="fas fa-users mr-2"></i> 8 friend requests
			<span class="float-right text-muted text-sm">12 hours</span>
			</a>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item">
			<i class="fas fa-file mr-2"></i> 3 new reports
			<span class="float-right text-muted text-sm">2 days</span>
			</a>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
		</div>
		</li>
		<li class="nav-item dropdown user user-menu">
		<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
			<img src="images/nopicture.jpg" class="user-image img-circle elevation-2" alt="User Image">
			<span class="hidden-xs">Bobby delos Santos</span>
		</a>
		<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			<!-- User image -->
			<li class="user-header bg-cyan">
			<img src="images/nopicture.jpg" class="img-circle elevation-2" alt="User Image">

			<p>
				Bobby delos Santos - Executive Producer
				<small>Member since Nov. 2012</small>
			</p>
			</li>
			<!-- Menu Body -->
			<li class="user-body">
			<div class="row">
				<div class="col-4 text-center">
				<a href="#">Settings</a>
				</div>
				<div class="col-4 text-center">
				<a href="#">Logs</a>
				</div>
				<div class="col-4 text-center">
				<a href="#">Admins</a>
				</div>
			</div>
			<!-- /.row -->
			</li>
			<!-- Menu Footer-->
			<li class="user-footer">
			<div class="pull-left">
				<a href="#" class="btn btn-default btn-flat">Profile</a>
			</div>
			<div class="pull-right">
				<a href="#" class="btn btn-default btn-flat">Sign out</a>
			</div>
			</li>
		</ul>
		</li>
		<!-- <li class="nav-item">
		<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
			<i class="fas fa-th-large"></i>
		</a>
		</li> -->
	</ul>
	</nav>
	<!-- /.navbar -->


	<div class="wrapper">
		<aside class="main-sidebar elevation-4 sidebar-dark-primary">
			<!-- Brand Logo -->
			<a href="{{ route('AdminDashboard') }}" class="brand-link">
			<img src="https://www.asoptv.com/wp-content/themes/asop-new/favicon.ico" alt="Loading.." class="brand-image img-circle elevation-3"
				style="opacity: .8">
			<span class="brand-text font-weight-light"><h3>ASOPTV</h3></span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
				<img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
				</div>
			</div> -->

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					with font-awesome or any other icon font library -->
				<!-- <li class="nav-item has-treeview menu-open">
					<a href="{{route('AdminDashboard')}}" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Menu
							</p>
						</a>
				</li> -->
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-cog"></i>
									<p>
										Accounts Settings
										<i class="right fas fa-angle-left"></i>
									</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('ManageAdmins') }}" class="nav-link">
										<i class="nav-icon fas fa-users"></i>
										<p>Manage Admins</p>
									</a>
									<a href="{{ route('ManageSongwriters') }}" class="nav-link">
										<i class="nav-icon fas fa-users"></i>
										<p>Manage Songwriters</p>
									</a>
						</li>
					<!-- <li class="nav-item">
						<a href="adminlte/pages/charts/flot.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Flot</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="adminlte/pages/charts/inline.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Inline</p>
						</a>
					</li> -->
					</ul>
				</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-list"></i>
									<p>
										Song Entries Settings
										<i class="right fas fa-angle-left"></i>
									</p>
							</a>
							<ul class="nav nav-treeview">
							<li class="nav-item">
									<a href="{{ route('ManageSongEntries') }}" class="nav-link">
										<i class="fas fa-file-audio-o nav-icon"></i>
										<p>Manage Song Entries</p>
									</a>
							</li>
							<li class="nav-item">
									<a href="{{ route('PendingEntries') }}" class="nav-link">
										<i class="fas fa-file-audio-o nav-icon"></i>
										<p>Pending Entries</p>
									</a>
							</li>
							<li class="nav-item">
									<a href="{{ route('ProcessingEntries') }}" class="nav-link">
										<i class="fas fa-file-audio-o nav-icon"></i>
										<p>Processing Entries</p>
									</a>
							</li>
							<li class="nav-item">
									<a href="{{ route('ApprovedEntries') }}" class="nav-link">
										<i class="fas fa-file-audio-o nav-icon"></i>
										<p>Approved Entries</p>
									</a>
							</li>
							<li class="nav-item">
									<a href="{{ route('NonapprovedEntries') }}" class="nav-link">
										<i class="fas fa-file-audio-o nav-icon"></i>
										<p>No Approved Entries</p>
									</a>
							</li>
					</ul>
				</li>

				<li class="nav-item has-treeview">
					<a href="https://adminlte.io/themes/AdminLTE/pages/charts/chartjs.html" class="nav-link">
						<i class="nav-icon fas fa-chart-pie"></i>
							<p>
								Analytics
							</p>
					</a>
				</li>
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
		<div class="secontent" class="container-fluid">
          <!-- Page Heading -->
         @yield('content')
      </div>

	
		<footer class="main-footer">
			<strong>Copyright &copy; 2020 <a href="https://www.asoptv.com/">ASOP Music Festival</a>.</strong>
				All rights reserved.
					<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 1.0
			</div>
		</footer>
	</div>


	<!-- jQuery -->
	<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

	<!-- jQuery UI 1.11.4 -->
	<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>

	<!-- Bootstrap 4 -->
	<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

	<!-- ChartJS -->
	<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

	<!-- Sparkline -->
	<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>

	<!-- JQVMap -->
	{{-- <script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script> --}}
	{{-- <script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}

	<!-- jQuery Knob Chart -->
	<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

	<!-- daterangepicker -->
	<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

	<!-- Summernote -->
	<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>

	<!-- overlayScrollbars -->
	<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

	<!-- jQuery 3 -->
	{{-- <script src="{{asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script> --}}

	<!-- Bootstrap 3.3.7 -->
	{{-- <script src="{{asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> --}}

	<!-- DataTables -->
	<script src="{{ asset("/vendor/datatables/jquery.dataTables.min.js") }}"></script>
	<script src="{{ asset("/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>
	<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> -->

	<!-- SlimScroll -->
	{{-- <script src="{{asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script> --}}

	<!-- FastClick -->
	{{-- <script src="{{asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script> --}}

	<!-- AdminLTE App -->
	<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>

	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	{{-- <script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script> --}}

	<!-- AdminLTE for demo purposes -->
	<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>

</body>
</html>
