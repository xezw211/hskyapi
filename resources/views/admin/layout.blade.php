<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{isset($title) ? $title : $default_title}}</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		
		@section('common_css')
			<!-- Bootstrap 3.3.5 -->
			<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
			<!-- Font Awesome -->
			<link rel="stylesheet" href="{{asset('admin/vendor/awesome/font-awesome.min.css')}}">
			<!-- Ionicons -->
			<link rel="stylesheet" href="{{asset('admin/vendor/ionicons/ionicons.min.css')}}">
		@show
		@section('customer_css')
			
			<!-- Theme style -->
			<link rel="stylesheet" href="{{asset('admin/vendor/dist/css/AdminLTE.min.css')}}">
			<!-- AdminLTE Skins. Choose a skin from the css/skins
			     folder instead of downloading all of them to reduce the load. -->
			<link rel="stylesheet" href="{{asset('admin/vendor/dist/css/skins/_all-skins.min.css')}}">

			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		@show
	</head>

	<body class="hold-transition skin-blue sidebar-mini">
	    <div class="wrapper">

		    <header class="main-header">
		        @include('admin.header')
		    </header>
		    <!-- Left side column. contains the logo and sidebar -->
		    <aside class="main-sidebar">
		        <!-- sidebar: style can be found in sidebar.less -->
		        <section class="sidebar">
		          	<!-- Sidebar user panel -->
		          	<div class="user-panel">
			            <div class="pull-left image">
			              	<img src="{{$login_avatar}}" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info">
				            <p>{{$login_name}}</p>
				            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			            </div>
		          	</div>
		     
		          	<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
			            <li class="header">MAIN NAVIGATION</li>
			            @include('admin.menu')
		          	</ul>
		        </section>
		        <!-- /.sidebar -->
		    </aside>

	      	<!-- Content Wrapper. Contains page content -->
	      	<div class="content-wrapper">
		        <!-- Content Header (Page header) -->
		        <section class="content-header">
		          	<h1>{{$project_name}}<small>{{$project_small_name}}</small>
		          	</h1>
		          	<ol class="breadcrumb">
		            	@section('breadcrumb')
			            	<li><a href="/admin"><i class="fa fa-dashboard"></i>用户后台主页</a></li>
			            	@forelse($breadcrumbs as $breadcrumb)
			            		@if($breadcrumb['click'])
			            			<li><a href="{{url($breadcrumb['url'])}}"><i class="fa fa-dashboard"></i>{{$breadcrumb['value']}}</a></li>
			            		@else
			            			<li class="active">{{$breadcrumb['value']}}</li>
			            		@endif
			            	@empty
			            	@endforelse
		            	@show
		          	</ol>
		        </section>

		        <!-- Main content -->
		        <section class="content">
		          	<!-- Small boxes (Stat box) -->
		          	@section('content')
			          	<div class="row">
				            <div class="col-lg-3 col-xs-6">
				              	<!-- small box -->
				              	<div class="small-box bg-aqua">
				                	<div class="inner">
					                  	<h3>150</h3>
					                  	<p>New Orders</p>
				                	</div>
				                	<div class="icon">
				                  		<i class="ion ion-bag"></i>
				                	</div>
				                	<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              	</div>
				            </div><!-- ./col -->
				            <div class="col-lg-3 col-xs-6">
				              <!-- small box -->
				              	<div class="small-box bg-green">
				              	  	<div class="inner">
				              	    	<h3>53<sup style="font-size: 20px">%</sup></h3>
				              	    	<p>Bounce Rate</p>
				              	  	</div>
				              	  	<div class="icon">
				              	    	<i class="ion ion-stats-bars"></i>
				              	  	</div>
				              	  	<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              	</div>
				            </div><!-- ./col -->
				            <div class="col-lg-3 col-xs-6">
				              	<!-- small box -->
				              	<div class="small-box bg-yellow">
				                	<div class="inner">
					                  	<h3>44</h3>
					                  	<p>User Registrations</p>
				                	</div>
					                <div class="icon">
					                  	<i class="ion ion-person-add"></i>
					                </div>
					                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              	</div>
				            </div><!-- ./col -->
				            <div class="col-lg-3 col-xs-6">
				              	<!-- small box -->
				              	<div class="small-box bg-red">
				                	<div class="inner">
				                  		<h3>65</h3>
				                  		<p>Unique Visitors</p>
				                	</div>
				                	<div class="icon">
				                  		<i class="ion ion-pie-graph"></i>
			                		</div>
				                	<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				              </div>
				            </div><!-- ./col -->
			          	</div><!-- /.row -->
		          	@show
		        </section><!-- /.content -->
	      	</div><!-- /.content-wrapper -->

	      	<footer class="main-footer">
	        	@include('admin.footer')
	      	</footer>
					
	      	<!-- Control Sidebar -->
	      	<aside class="control-sidebar control-sidebar-dark">
		        <!-- Create the tabs -->
		        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
		          	<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
		          	<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
		        </ul>
		        	<!-- Tab panes -->
		        	<div class="tab-content">
		          		<!-- Home tab content -->
		          		<div class="tab-pane" id="control-sidebar-home-tab">
	            		<h3 class="control-sidebar-heading">Recent Activity</h3>
			            <ul class="control-sidebar-menu">
			              	<li>
				                <a href="javascript::;">
				                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
				                  <div class="menu-info">
				                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
				                    <p>Will be 23 on April 24th</p>
				                  </div>
				                </a>
			              	</li>
			              	<li>
				                <a href="javascript::;">
				                  <i class="menu-icon fa fa-user bg-yellow"></i>
				                  <div class="menu-info">
				                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
				                    <p>New phone +1(800)555-1234</p>
				                  </div>
				                </a>
			              	</li>
				            <li>
				                <a href="javascript::;">
				                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
				                  <div class="menu-info">
				                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
				                    <p>nora@example.com</p>
				                  </div>
				                </a>
				            </li>
			              	<li>
				                <a href="javascript::;">
				                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
				                  <div class="menu-info">
				                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
				                    <p>Execution time 5 seconds</p>
				                  </div>
				                </a>
			              	</li>
			            </ul><!-- /.control-sidebar-menu -->

		            	<h3 class="control-sidebar-heading">Tasks Progress</h3>
		            	<ul class="control-sidebar-menu">
			              	<li>
				                <a href="javascript::;">
				                  <h4 class="control-sidebar-subheading">
				                    Custom Template Design
				                    <span class="label label-danger pull-right">70%</span>
				                  </h4>
				                  <div class="progress progress-xxs">
				                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
				                  </div>
				                </a>
			              	</li>
			              	<li>
				                <a href="javascript::;">
				                  <h4 class="control-sidebar-subheading">
				                    Update Resume
				                    <span class="label label-success pull-right">95%</span>
				                  </h4>
				                  <div class="progress progress-xxs">
				                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
				                  </div>
				                </a>
			              	</li>
			              	<li>
				                <a href="javascript::;">
				                  <h4 class="control-sidebar-subheading">
				                    Laravel Integration
				                    <span class="label label-warning pull-right">50%</span>
				                  </h4>
				                  <div class="progress progress-xxs">
				                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
				                  </div>
				                </a>
			              	</li>
			              	<li>
				                <a href="javascript::;">
				                  <h4 class="control-sidebar-subheading">
				                    Back End Framework
				                    <span class="label label-primary pull-right">68%</span>
				                  </h4>
				                  <div class="progress progress-xxs">
				                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
				                  </div>
				                </a>
			              	</li>
		            	</ul><!-- /.control-sidebar-menu -->
		          	</div><!-- /.tab-pane -->
		          <!-- Stats tab content -->
		          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
		          <!-- Settings tab content -->
		          <div class="tab-pane" id="control-sidebar-settings-tab">
		            <form method="post">
		              <h3 class="control-sidebar-heading">General Settings</h3>
		              <div class="form-group">
		                <label class="control-sidebar-subheading">
		                  Report panel usage
		                  <input type="checkbox" class="pull-right" checked>
		                </label>
		                <p>
		                  Some information about this general settings option
		                </p>
		              </div><!-- /.form-group -->

		              <div class="form-group">
		                <label class="control-sidebar-subheading">
		                  Allow mail redirect
		                  <input type="checkbox" class="pull-right" checked>
		                </label>
		                <p>
		                  Other sets of options are available
		                </p>
		              </div><!-- /.form-group -->

		              <div class="form-group">
		                <label class="control-sidebar-subheading">
		                  Expose author name in posts
		                  <input type="checkbox" class="pull-right" checked>
		                </label>
		                <p>
		                  Allow the user to show his name in blog posts
		                </p>
		              </div><!-- /.form-group -->

		              <h3 class="control-sidebar-heading">Chat Settings</h3>

		              <div class="form-group">
		                <label class="control-sidebar-subheading">
		                  Show me as online
		                  <input type="checkbox" class="pull-right" checked>
		                </label>
		              </div><!-- /.form-group -->

		              <div class="form-group">
		                <label class="control-sidebar-subheading">
		                  Turn off notifications
		                  <input type="checkbox" class="pull-right">
		                </label>
		              </div><!-- /.form-group -->

		              <div class="form-group">
		                <label class="control-sidebar-subheading">
		                  Delete chat history
		                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
		                </label>
		              </div><!-- /.form-group -->
		            </form>
		          </div><!-- /.tab-pane -->
		        </div>
	      	</aside>
	      	<!-- /.control-sidebar -->
	      	<!-- Add the sidebar's background. This div must be placed
	           immediately after the control sidebar -->
	      	<div class="control-sidebar-bg"></div>
	    </div><!-- ./wrapper -->
		
		@section('js')
		    <!-- jQuery 2.1.4 -->
		    <script src="{{asset('admin/vendor/jQuery/jQuery-2.1.4.min.js')}}"></script>
		    {{-- // <script src="{{asset('jquery/jquery.1.11.2.min.js')}}"></script> --}}
		    <!-- jQuery UI 1.11.4 -->
		    <script src="{{asset('admin/vendor/jQueryUI/jquery-ui.min.js')}}"></script>
		    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		    <script>
		      $.widget.bridge('uibutton', $.ui.button);
		    </script>
		    <!-- Bootstrap 3.3.5 -->
		    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		    <!-- Sparkline -->
		    <script src="{{asset('admin/vendor/sparkline/jquery.sparkline.min.js')}}"></script>
		    <!-- Slimscroll -->
		    <script src="{{asset('admin/vendor/slimScroll/jquery.slimscroll.min.js')}}"></script>
		    <!-- FastClick -->
		    <script src="{{asset('admin/vendor/fastclick/fastclick.min.js')}}"></script>
		    <!-- AdminLTE App -->
		    <script src="{{asset('admin/vendor/dist/js/app.min.js')}}"></script>
		    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		    {{-- // <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> --}}
		    <!-- AdminLTE for demo purposes -->
		    {{-- // <script src="{{asset('dist/js/demo.js')}}"></script> --}}
		@show
	</body>
</html>
