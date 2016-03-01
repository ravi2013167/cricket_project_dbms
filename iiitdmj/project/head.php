<!DOCTYPE html>
<html>
<?php
session_start();
?>
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
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <!-- Bootstrap 3.3.5 -->
	  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	  
	    <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
	  <link rel="stylesheet" href="dist/css/AdminLTE.css">
	  <!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
	  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	  <!-- Bootstrap 3.3.5 -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
	  <!-- iCheck -->
	  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
	  <link rel="stylesheet" href="fonts/font.css">
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
		<!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href="plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="plugins/bootstrap-slider/slider.css">
   <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
    <style>
    /* FROM HTTP://WWW.GETBOOTSTRAP.COM
     * Glyphicons
     *
     * Special styles for displaying the icons and their classes in the docs.
     */

    .bs-glyphicons {
      padding-left: 0;
      padding-bottom: 1px;
      margin-bottom: 20px;
      list-style: none;
      overflow: hidden;
    }

    .bs-glyphicons li {
      float: left;
      width: 25%;
      height: 115px;
      padding: 10px;
      margin: 0 -1px -1px 0;
      font-size: 12px;
      line-height: 1.4;
      text-align: center;
      border: 1px solid #ddd;
    }

    .bs-glyphicons .glyphicon {
      margin-top: 5px;
      margin-bottom: 10px;
      font-size: 24px;
    }

    .bs-glyphicons .glyphicon-class {
      display: block;
      text-align: center;
      word-wrap: break-word; /* Help out IE10+ with class names */
    }

    .bs-glyphicons li:hover {
      background-color: rgba(86, 61, 124, .1);
    }

    @media (min-width: 768px) {
      .bs-glyphicons li {
        width: 12.5%;
      }
    }
  </style>

		 <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
</head>

<body class="hold-transition skin-purple sidebar-mini" style="font-family:'MontserratRegular'">

<div class="wrapper" >

  <header class="main-header" >
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IIIT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b style="font-family:'MontserratRegular'">IIITDM JABALPUR</b></span>
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
			  <?php
									$q="Genre='0' ";
									include('../dbms.php');
									$qry="SELECT * FROM logins WHERE USERNAME='".$_SESSION['USER_ID']."'";
									$result=mysql_query($qry);
									while($row=mysql_fetch_assoc($result))
									{
										
										$s=$row['INTERESTS'].$row['SPORTS'];
										for($i=1;$i<=20;$i++)
										{
											if($s[$i-1]=='1')
												{
													$q.="OR Genre='".(string)$i."' ";
												}
										}
									}				
									//echo $s;
									include('../dbms.php');
									$qry="SELECT * FROM Notification WHERE ".$q." ORDER BY Genre";
									$i=0;
									$result=mysql_query($qry);
									while($row=mysql_fetch_assoc($result))
									{	$i++;
									}
									
              echo "<span class='label label-warning'>".$i."</span>";
			  
           echo "</a>
            <ul class='dropdown-menu'>
              
              <li>
                <!-- inner menu: contains the actual data -->
				<ul class='menu'> ";
									include('../dbms.php');
									$qry="SELECT * FROM Notification WHERE ".$q." ORDER BY Genre";
									$i=1;
									$result=mysql_query($qry);
									while($row=mysql_fetch_assoc($result))
									{	
										echo "<li>
												<a href='".$row['Href']."'>
													<i class='".$row['Icon']."'></i> ".$row['Notification']."
												</a>
											</li>";
									}
				?>
                </ul>
              </li>
              <li class="footer"><a href="notification.php">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/002.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['NAME']; ?></span>
            </a>
            <ul class="dropdown-menu" role="menu">
				<table cellspacing="50" style="width:95%;margin-left:10px;line-height:1px;">
				<col width=10% />
				<col width=50% />
				<col width=40% />
				<tr><td><i class="fa fa-trophy"></i><td ><li><?php echo $_SESSION['NAME']; ?></li></td></td><td><a href="../index.php">Sign Out</a></td></tr>
				<tr><td><i class="fa fa-trophy"></i><td ><li>Profile</li></td></td><td><a href="profile.php">Edit</td></a></tr>
				<tr><td><i class="fa fa-trophy"></i><td ><li>Settings</li></td></td><td><a href="settings.php">Manage</td></a></tr>
				</table>
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
          <a href="dashboard.php">
            <i class="glyphicon glyphicon-home"></i> <span>Dashboard</span>
          </a>
        </li>
		<li>
          <a href="courses.php">
            <i class="glyphicon glyphicon-book"></i> <span>Courses</span>
          </a>
        </li>
		<li>
          <a href="profile.php">
            <i class="glyphicon glyphicon-user"></i> <span>Profile</span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="general_forms.php"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="advanced_forms.php"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            
          </ul>
        </li>
		<li>
          <a href="widgets.php">
            <i class="fa fa-th"></i> <span>Widgets</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="gui_elements.php"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="icons.php"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="buttons.php"><i class="fa fa-circle-o"></i> Buttons</a></li>
    
            
            <li><a href="modals.php"><i class="fa fa-circle-o"></i> Modals</a></li>
			
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="table.php"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="data_table.php"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-tasks"></i> <span>Time Table</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-trophy"></i> <span>Awards</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Placement Cell</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-fighter-jet"></i> <span>Leave Requests</span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-thumbs-down"></i>
            <span>Complaints</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> CC</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> HOSTEL</a></li>
          </ul>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-users"></i> <span>COUNSELLING CELL</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-ambulance"></i> <span>HEALTH CENTRE</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-institution"></i> <span>LIBRARY</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-th"></i> <span>GYMKHANA</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-th"></i> <span>CLUB MANAGEMENT</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-th"></i> <span>PBI</span>
          </a>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-th"></i> <span>FEEDBACK</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
