<?php

session_start();
if(!isset($_SESSION['logged_in'])){ 
      header("Location:../../../index.html");} 
?>
<!DOCTYPE html>
<html>
<head>
<style media="screen">
    .container { border: solid #ccc; width:300px; height: 150px; overflow-y: scroll;  position: left; background-color:#ffffff;}
	
	#customers {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	  
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}
	
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Calendly | Who is going</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="js/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
     

    <!-- Right navbar links -->
   
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
     
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/NcatLogo.png"
           alt="North Carolina A&T Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Calendly for students</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"> <?php if(isset($_SESSION['use'])){{ echo $_SESSION['use'];}} ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
		
		<a href="../../index.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p> Dashboard </p></a>
			
			<a href="profile.php" class="nav-link ">
            <i class="nav-icon fas fa-address-card"></i>
            <p>My profile</p></a>
		
           
		    <a href="../calendar.php" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>Calendar</p></a>
           
			
			<a href="contacts.html" class="nav-link ">
            <i class="nav-icon fas fa-address-book"></i>
            <p>Contacts</p></a>
        
		    <a href="../../../Logout/logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p></a>

             
  
      <!-- /.sidebar-menu -->
    </div>
	
	<div id="calendar_div">
		<?php echo getCalender(); ?>
	</div>
    <!-- /.sidebar -->
  </aside>

