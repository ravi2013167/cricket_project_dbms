<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Student | Dashboard</title>
		<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini" style="font-family:tahoma;">

<div class="wrapper" >

  <header class="main-header" >
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IIIT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b style="font-family:tahoma;">IIITDM JABALPUR</b></span>
    </a>
	<!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation" >
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
	  <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
		  
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/002.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">john</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/002.jpg" class="img-circle" alt="User Image">
                <p>
                  john - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
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
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
        <div class="user-panel">
		<div class="image">
         <center> <img src="img/002.jpg" class="img-circle" alt="User Image" width=100% height=5%>
		  </center>
        </div>
		</div>
      <ul class="sidebar-menu">	
        <li class="header"><h5><b style="color:#ffffff;">QUICK LINKS</b></h5></li></li>
        <li>
          <a href="index.html">
            <i class="fa fa-th"></i> <span>Dashboard</span>
          </a>
        </li>
		<li class="live">
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>COURSES</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>TIME TABLE</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>AWARDS</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>PLACEMENT CELL</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>LEAVE REQUESTS</span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>COMPLAINTS</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> CC</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> HOSTEL</a></li>
          </ul>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>COUNSELLING CELL</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>HEALTH CENTRE</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>LIBRARY</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>GYMKHANA</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>CLUB MANAGEMENT</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>PBI</span>
          </a>
        </li>
		<li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>FEEDBACK</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="active">Courses</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <div class="row"> 
	   
	   <div class="col-lg-12 col-xs-12 col-md-12">
			 <!-- START CUSTOM TABS -->
      <h2 class="page-header">Settings</h2>

          <!-- general form elements disabled -->
          <div class="box ">
            <div class="box-header with-border">
              <h3 class="box-title">Receive Notifications Regarding</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                
				<!-- checkbox -->
                <div class="form-group" style="overflow:auto">
                  <h4>Clubs</h4>
				  <table class="table table-responsive" cellpadding=0 cellspacing=0 style="overflow:scroll;border-collapse:collapse;margin:0;padding:0">
				  <tr>
				  <td>
                    
                      <input type="checkbox">
                      Programming
                    
                  </td>

                  <td>
                    
                      <input type="checkbox">
                      Design
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Electronics
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Music
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Dance
                    
                  </td>
				  </tr>
				  <tr>
				  <td>
                      <input type="checkbox">
                      Drama
                  </td>
				  <td>
                      <input type="checkbox">
                      Literary
                  </td>
				  <td>
                      <input type="checkbox">
                      Astronomy
                  </td>
				  <td>
                      <input type="checkbox">
                      CAD
                  </td>
				  <td>
                      <input type="checkbox">
                      
                  </td>
				  </tr>
				</table>
                  
                </div>

				<!-- checkbox -->
                <div class="form-group" style="overflow:auto">
                  <h4>Sports</h4>
				  <table class="table table-responsive" cellpadding=0 cellspacing=0 style="overflow:scroll;border-collapse:collapse;margin:0;padding:0">
				  <tr>
				  <td>
                    
                      <input type="checkbox">
                      Cricket
                    
                  </td>

                  <td>
                    
                      <input type="checkbox">
                      Football
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Chess
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Badminton
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Table Tennis
                    
                  </td>
				  </tr>
				  <tr>
				  <td>
                      <input type="checkbox">
                      Carrom
                  </td>
				  <td>
                      <input type="checkbox">
                      Basketball
                  </td>
				  <td>
                      <input type="checkbox">
                      Lawn Tennis
                  </td>
				  <td>
                      <input type="checkbox">
                      
                  </td>
				  <td>
                      <input type="checkbox">
                      
                  </td>
				  </tr>
				</table>
                  
                </div>
				<div class="form-group" style="overflow:auto">
				<h4>Interests</h4>
				  <table class="table table-responsive" cellpadding=0 cellspacing=0 style="overflow:scroll;border-collapse:collapse;margin:0;padding:0">
				  <tr>
				  <td>
                    
                      <input type="checkbox">
                      Programming
                    
                  </td>

                  <td>
                    
                      <input type="checkbox">
                      Design
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Electronics
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Music
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox">
                      Dance
                    
                  </td>
				  </tr>
				  <tr>
				  <td>
                      <input type="checkbox">
                      Drama
                  </td>
				  <td>
                      <input type="checkbox">
                      Literary
                  </td>
				  <td>
                      <input type="checkbox">
                      Astronomy
                  </td>
				  <td>
                      <input type="checkbox">
                      CAD
                  </td>
				  <td>
                      <input type="checkbox">
                      
                  </td>
				  </tr>
				</table>
                  
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
      
		
      
	  
	  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com"></a>.</strong> All rights
    reserved.
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
        </ul>
        <!-- /.control-sidebar-menu -->

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
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
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
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as 
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
