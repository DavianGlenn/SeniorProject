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
          <a  class="d-block"> <?php if(isset($_SESSION['use'])){{ echo $_SESSION['use'];}} ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
		<a href="../../orgdash.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p> Dashboard </p></a>
			
			<a href="../../../createevent.html" class="nav-link ">
            <i class="nav-icon fas fa-calendar-plus"></i>
            <p>Add New Event</p></a>
			<a href="whosGoingOrg.php" class="nav-link active" >
            <i class="nav-icon fas fa-question"></i>
            <p>Who's Going?</p></a>
			<a href="Rate.php" class="nav-link" >
            <i class="nav-icon fas fa-thumbs-up"></i>
            <p>Rated Events</p></a>
			 
		    <a href="../../../Logout/logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p></a>

             
  
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>See Who Is Going</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Academic Events</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
		<div class=container>
		<?php
          $conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT c.title as title,c.userid,u.first_name as first ,u.last_name as last FROM calendarevents c, user_account u where c.userid=u.ID and c.type='academic' and c.orgID={$_SESSION['userid']}" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	echo "<table id=customers border ='1'>";
	echo "<tr><td>Here Are The People Going To Academic Events</td><td>Event Name</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['first']} {$row['last']}</td><td> {$row['title']}</td></tr>\n";
	}
	echo "</table>";
	?>
    
        <!-- /.card-footer-->
      </div>
	  </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Social Events</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            
          </div>
        </div>
        <div class="card-body">
		<div class=container>
		<?php
          $conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT c.title as title,c.userid,u.first_name as first ,u.last_name as last FROM calendarevents c, user_account u where c.userid=u.ID and c.type='social' and c.orgID={$_SESSION['userid']}" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	echo "<table id=customers border ='1'>";
	echo "<tr><td>Here Are The People Going To Social Events</td><td>Event Name</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['first']} {$row['last']}</td><td> {$row['title']}</td></tr>\n";
	}
	echo "</table>";
	?>
    
        <!-- /.card-footer-->
      </div>
	  </div>
      <!-- /.card -->
</section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Community Service Events</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            
          </div>
        </div>
        <div class="card-body">
		<div class=container>
		<?php
          $conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT c.title as title,c.userid,u.first_name as first ,u.last_name as last FROM calendarevents c, user_account u where c.userid=u.ID and c.type='community service' and c.orgID={$_SESSION['userid']}" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	echo "<table id=customers border ='1'>";
	echo "<tr><td>Here Are The People Going To Community Service Events</td><td>Event Name</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['first']} {$row['last']}</td><td> {$row['title']}</td></tr>\n";
	}
	echo "</table>";
	?>
    
        <!-- /.card-footer-->
      </div>
	  </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<!-- Main content -->
        <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Career Opportunity Events</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            
          </div>
        </div>
        <div class="card-body">
		<div class=container>
		<?php
          $conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT c.title as title,c.userid,u.first_name as first ,u.last_name as last FROM calendarevents c, user_account u where c.userid=u.ID and c.type='career opportunity' and c.orgID={$_SESSION['userid']}" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	echo "<table id=customers border ='1'>";
	echo "<tr><td>Here Are The People Going To Career Opportunity Events</td><td>Event Name</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['first']} {$row['last']}</td><td> {$row['title']}</td></tr>\n";
	}
	echo "</table>";
	?>
    
        <!-- /.card-footer-->
      </div>
	  </div>
	  
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
  
  
  <!-- /.content-wrapper -->
  
  </div>
  <!-- /.content-wrapper -->
  
  
  </div>
  <!-- /.content-wrapper -->
  
  

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
