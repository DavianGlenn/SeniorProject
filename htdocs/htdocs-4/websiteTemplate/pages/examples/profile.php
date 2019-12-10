<?php
session_start();
if(!isset($_SESSION['logged_in'])){ 
      header("Location:../index.html");}  
?>
<!DOCTYPE html>
<html>
<head>
<style media="screen">
input[type=text] {
  width: 150%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
    .container { border:5px solid #ccc; width:350px; height: 500px; overflow-y: scroll;  position: left; background-color:#ffffff;}
	
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
            <i class="nav-icon far fa-thumbs-up"></i>
            <p>Hobbies</p></a>
		
           
		    <a href="../../../newc/php_event_calendar/index.php" class="nav-link">
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

                <p class=" text-center">NCAT Student</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Activities Registered For</b> <a class="float-right"><?php   
					 $host = "localhost";
					  $dbusername = "root";
					  $dbpassword = "";
					  $dbname = "Senior Project";
// Create connection
 $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
		$sql2 = "SELECT title  from calendarevents where userid='{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	
	$count = 0;
	while($row=mysqli_fetch_assoc($result))
	{
		$count++;
		
	}echo $count;
	
	 ?></a>
                  </li>
                
                </ul>

                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Enterusername@aggies.ncat.edu&su=Hey Friend!&body=Say Hello!" target="_blank" class="btn btn-primary btn-block"><b> Send Email</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Success coach</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted" id="educationTip">
                  Go into each class knowing you will pass!
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Career</strong>

                <p class="text-muted" id="careerTip">
                   Narrow down what you want to do for a living. Employers like to know that you have a goal in mind!
                </p>

                <hr>

                <strong><i class="fab fa-angellist mr-1"></i> Social</strong>

                <p class="text-muted" id="socialTip">
                     One really supportive friends is better than 3 that dont care!
                </p>

                <hr>

                <a onclick="generateNew()" class="btn btn-primary btn-block"><b>Suggest new tips</b></a>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <script src="../../../js/generateTips.js"></script>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Events</a></li>
                 
                </ul>
              </div><!-- /.card-header -->
			  
              <div class="card-body">
                
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline" name="Your Events">
				  <h3>Here are the Events You Chose to Attend</h3>
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                        <form action="" method="POST"> <div class="container">
					<?php
                    
					 $host = "localhost";
					  $dbusername = "root";
					  $dbpassword = "";
					  $dbname = "Senior Project";
// Create connection
 $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
		$sql2 = "SELECT title,c.id as id,c.date as date,TIME_FORMAT(Time, '%h:%i%p') as Time FROM calendarevents c JOIN orgevents ON title = orgevents.Event WHERE userid='{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	echo "<table id =customers border ='1'>";
	echo "<tr><td>Delete Event</td><td>Here are the Events You Chose to Attend</td><td>Date</td><td>Time</td></tr>\n";
	
	
	while($row=mysqli_fetch_assoc($result))
	{
	$count=0;$a="";
	$a ="n_";
	$a .=$row['id'];
		echo"<tr><td> <input type='checkbox' name='$a'></td><td> {$row['title']}</td><td> {$row['date']}</td><td> {$row['Time']}</td></tr>\n";
			
		 
	if(isset($_POST[$a])){
		$into=mysqli_query($conn,"DELETE FROM calendarevents WHERE id ='{$row['id']}' and userid= '{$_SESSION['userid']}' AND title= '{$row['title']}' ");	
		echo "<meta http-equiv=\"refresh\" content=\"3;url=profile.php\"/>";
			 
		 }
		  $count++; 
	}
	
	
	
	echo "</table>";
	
	
                     ?>  
                      </div><input type='submit'name='submit2' value='Delete Event' onclick='btnClick();'>
                    </form>
                  </div>
				 
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
		     <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Rate</a></li>
                 
                </ul>
              </div><!-- /.card-header -->
			  
              <div class="card-body">
                
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline" name="Your Events">
				  <h3>Rate the Events You Chose to Attend</h3>
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                        <form action="" method="POST"> <div class="container">
					<?php
                    error_reporting(E_ERROR | E_PARSE);
					 $host = "localhost";
					  $dbusername = "root";
					  $dbpassword = "";
					  $dbname = "Senior Project";
// Create connection
 $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
		$sql2 = "SELECT id,type, org_name,title FROM `calendarevents` where date <= CURRENT_DATE and userid='{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	echo "<table id =customers border ='1'>";
	echo "<td>Please Rate the Events You Chose to Attend</td><td>Dissapointed</td><td>Satisfied</td><td>Excellent</td></tr>\n";
	
	
	while($row=mysqli_fetch_assoc($result))
	{
	$count=0;
	$a="";
	$a ="q_";
	$a .=$row['id'];

		echo"<tr><td> {$row['title']}</td><td> <input type='radio' name='$a' Value='Dissapointed'></td><td> <input type='radio' name='$a' Value='Satisfied'></td><td> <input type='radio' name='$a' Value='Excellent'></td></tr>\n";
			
		 $answer = $_POST[$a];
	if($answer=="Dissapointed"){
		$into=mysqli_query($conn,"Insert into rate_events (Event,Rate,Userid,org_name,type) values ('{$row['title']}','Dissapointed','{$_SESSION['userid']}','{$row['org_name']}','{$row['type']}') ");	
		echo "";
			 }	if($answer=="Satisfied"){
		$into=mysqli_query($conn,"Insert into rate_events (Event,Rate,Userid,org_name,type) values ('{$row['title']}','Satisfied','{$_SESSION['userid']}','{$row['org_name']}','{$row['type']}') ");	
		echo "";
			 }	if($answer=="Excellent"){
		$into=mysqli_query($conn,"Insert into rate_events (Event,Rate,Userid,org_name,type) values ('{$row['title']}','Excellent','{$_SESSION['userid']}','{$row['org_name']}','{$row['type']}') ");	
		echo "";
			 }
		  
	}
	
	
	
	echo "</table>";
	
	
                     ?>  
                      </div><input type='submit'name='submit2' value='Submit' onclick='btnClick();'>
					  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
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
      <b></b> 
    </div>
    <strong> <a href="#"></a>.</strong> 
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
