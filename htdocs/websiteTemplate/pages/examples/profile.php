<?php
session_start();
if(!isset($_SESSION['logged_in'])){ 
      header("Location:../index.html");}  
?>
<!DOCTYPE html>
<html>
<head>
<style media="screen">
    .container { border:2px solid #ccc; width:300px; height: 100px; overflow-y: scroll;  position: left; background-color:#ffffff;}
	
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
  <title>Calendly | User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="contacts.html" class="nav-link">Contacts</a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/ncatLogo.png"
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
          <a href="profile.html" ><?php if(isset($_SESSION['use'])){{ echo $_SESSION['use'];}} ?></a>
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
			
			<a href="profile.php" class="nav-link active">
            <i class="nav-icon fas fa-address-card"></i>
            <p>My profile</p></a>
			
			<a href="../../hobby.php" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Hobby Lobby</p></a>
		
           
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
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/avatar.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php if(isset($_SESSION['use'])){{echo $_SESSION['First'];echo" "; echo $_SESSION['Last'];echo " Profile";}} ?></h3>

                <p class=" text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Activities this month</b> <a class="float-right">5</a>
                  </li>
                  <li class="list-group-item">
                    <b>Buddies to meet</b> <a class="float-right">3</a>
                  </li>
                </ul>

                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Enterusername@aggies.ncat.edu&su=Hey Friend!&body=Say Hello!" class="btn btn-primary btn-block"><b>Email</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  What is your level of education?
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Where are you from?</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                 
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">What else should we know?</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Your Events</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/avatar.png" alt="user image">
                        <span class="username">
                          <a href="#">My Bio</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        I am a student at North Caorlina A&T studying Software engineering. I am from New Jersey and I like to play video games and 
						take long walks in the park.
                      </p>

                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/avatar.png" alt="User Image">
                        <span class="username">
                          <a href="#">My status</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">recently</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Chemistry sucks!
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input ID="statusUpdate" class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button onClick = updateStatus() type="submit" class="btn btn-danger">update</button>
                          </div>
                        </div>
                      </form>
                    </div>
					
                    <script>
function updateStatus() {
  var x = document.getElementById("statusUpdate").textContent;
  document.getElementById("myStatus").innerHTML = x;  
}
</script>				
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Recent event</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description"></span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                              <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline" name="Your Events">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="container">
					  <?php
                    $conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT event_name,Event,date_format(Date, '%a %b %D %Y') as Date ,TIME_FORMAT(Time, '%h:%i%p') as time FROM `orgevents`,socials where event_name =EVENT and userid= '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql");
	echo "<table id =customers border ='1'>";
	echo "<tr><td>Here are the Social Events You Chose to Attend</td><td>Date</td><td>Time</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['event_name']}</td><td> {$row['Date']}</td><td> {$row['time']}</td></tr>\n";
	}
	echo "</table>";
	
	
                     ?> 
                      </div>
                    </form>
                  </div>
				  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="container">
					  <?php
                    $conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT event_name,Event,date_format(Date, '%a %b %D %Y') as Date ,TIME_FORMAT(Time, '%h:%i%p') as time FROM `orgevents`,academic where event_name =EVENT and userid= '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql");
	echo "<table id =customers border ='1'>";
	echo "<tr><td>Here are the Academic Events You Chose to Attend</td><td>Date</td><td>Time</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['event_name']}</td><td> {$row['Date']}</td><td> {$row['time']}</td></tr>\n";
	}
	echo "</table>";
	
	
                     ?> 
                      </div>
					  </div>
					    <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="container">
					  <?php
                    $conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT event_name,Event,date_format(Date, '%a %b %D %Y') as Date ,TIME_FORMAT(Time, '%h:%i%p') as time FROM `orgevents`,commserv where event_name =EVENT and userid= '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql");
	echo "<table id =customers border ='1'>";
	echo "<tr><td>Here are the Community Service Events You Chose to Attend</td><td>Date</td><td>Time</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['event_name']}</td><td> {$row['Date']}</td><td> {$row['time']}</td></tr>\n";
	}
	echo "</table>";
	
	
                     ?> 
                      </div>
					  </div>
					   <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="container">
					  <?php
                    $conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT event_name,Event,date_format(Date, '%a %b %D %Y') as Date ,TIME_FORMAT(Time, '%h:%i%p') as time FROM `orgevents`,careerop where event_name =EVENT and userid= '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql");
	echo "<table id =customers border ='1'>";
	echo "<tr><td>Here are the Career Opportunity Events You Chose to Attend</td><td>Date</td><td>Time</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['event_name']}</td><td> {$row['Date']}</td><td> {$row['time']}</td></tr>\n";
	}
	echo "</table>";
	
	
                     ?> 
                      </div>
					  </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="#">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

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
