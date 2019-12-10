<?php
include"../users.php";
if(!isset($_SESSION['logged_in'])){ 
      header("Location:../index.html");}  
?>

<!DOCTYPE html>
<html>
<head>
<style media="screen">
    .container { border:2px solid #ccc; width:300px; height: 200px; overflow-y: scroll;  position: left; background-color:#ffffff;}
	
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
<style media="screen">
    /* Popup container - can be anything you want */
    .popup {
      position: relative;
      display: inline-block;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* The actual popup */
    .popup .popuptext {
      visibility: hidden;
      width: 160px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 8px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -80px;
    }

    /* Popup arrow */
    .popup .popuptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class - hide and show the popup */
    .popup .show {
      visibility: visible;
      -webkit-animation: fadeIn 1s;
      animation: fadeIn 1s;
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
      from {opacity: 0;}
      to {opacity: 1;}
    }

    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity:1 ;}
    }
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calendly | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Table Style -->
  <link rel="stylesheet" href="../css/tables.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>-
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>

    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/ncatLogo.png" alt="North Carolina A&T Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Calendly for students</span>
    </a>


    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a > <?php if(isset($_SESSION['use'])){{ echo $_SESSION['use'];}} ?></a>
        </div>
      </div>


      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <a href="index.php" class="nav-link active">
            <i class="nav-icon fas fa-home"></i>
            <p> Dashboard </p></a>
			
			<a href="../createevent.html" class="nav-link ">
            <i class="nav-icon fas fa-calendar-plus"></i>
            <p>Add New Event</p></a>
			<a href="pages/examples/whosGoingOrg.php" class="nav-link ">
            <i class="nav-icon fas fa-question"></i>
            <p>Who's Going?</p></a>
			<a href="pages/examples/Rate.php" class="nav-link ">
            <i class="nav-icon fas fa-thumbs-up"></i>
            <p>Rated Events</p></a>
			 
		    <a href="../Logout/logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p></a>
			
		
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Organization Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

 
         <!-- Social List -->
            <div class="card- body">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-registered"></i>
		Registered Events          </h3>

              
              </div>
              <!-- /.card-header -->
           <!-- Social List -->
            <div class="card- body">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-graduation-cap"></i>
				Academic                </h3>

              
              </div>
              <!-- /.card-header -->
          <div class="card-body">
			
			  
                <ul class="todo-list" data-widget="todo-list">
                   <form action="" method="post">
             <div class=container>   
  <?php 
	error_reporting(E_ERROR | E_PARSE); 
	$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
 
	$result=mysqli_query($con, "SELECT id,event, date, type, location ,TIME_FORMAT(Time, '%h:%i%p') as time from orgevents where Orgid='{$_SESSION['userid']}' and type ='academic'") or die("Bad Querey");
	

	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr>
	<td>Delete Event</td>
	<td>Event</td>
	<td>Location</td>
	<td>Date</td>
	<td>Type</td>
	<td>Time</td>
	 </tr>\n";
	 $count=1;
	;
	while($row=mysqli_fetch_assoc($result))
	{
 $a="";
	$a ="n_";
	$a .= $row['id'];
	
	echo "<tr>	<td> <input type='checkbox' name='$a'></td>
                  <td>{$row['event']}</td>
                  <td>{$row['location']}</td> 
				  <td>{$row['date']}</td> 
				  <td>{$row['type']}</td>
				  <td>{$row['time']}</td>
               
                   </tr>";
               
			
			   
			  
			   if(isset($_POST[$a])){
		$into=mysqli_query($con,"DELETE FROM orgevents WHERE Orgid='{$_SESSION['userid']}' AND Event= '{$row['event']}' ");	
		echo "<meta http-equiv=\"refresh\" content=\".5;url=orgDash.php\"/>";
			 
		 }   $count++;
      }
	
	echo "</table>";
	
	 
	 
	 
	
	
	?> </div><input type='submit'name='submit2' value='Delete Event'>
   </div> 
    
   
			<script type ="text/javascript">
			function mess() {
   alert(" Your event was added");
   return true;
}
</script>
        </form>
		<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    </div> <!-- /container -->

            <!-- Social List -->
            <div class="card- body">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  Social
                </h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			
			  
                <ul class="todo-list" data-widget="todo-list">
                   <form action="" method="post">
          <div class=container>   
	<?php 
	error_reporting(E_ERROR | E_PARSE); 
	$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
 
	$result=mysqli_query($con, "SELECT id, event, date, type, location ,TIME_FORMAT(Time, '%h:%i%p') as time from orgevents where Orgid='{$_SESSION['userid']}' and type ='social'") or die("Bad Querey");
	

	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr>
	<td>Delete Event</td>
	<td>Event</td>
	<td>Location</td>
	<td>Date</td>
	<td>Type</td>
	<td>Time</td>
	 </tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{ $count=1;
	$a="";
	$a ="b_";
	$a .= $row['id'];

	echo "<tr>	<td> <input type='checkbox' name='$a'></td>
                  <td>{$row['event']}</td>
                  <td>{$row['location']}</td> 
				  <td>{$row['date']}</td> 
				  <td>{$row['type']}</td>
				  <td>{$row['time']}</td>
                 
                  
               </tr>";
			    $count++;
			   
			   if(isset($_POST[$a])){
		$into=mysqli_query($con,"DELETE FROM orgevents WHERE Orgid='{$_SESSION['userid']}' AND Event= '{$row['event']}' ");	
		echo "<meta http-equiv=\"refresh\" content=\".5;url=orgDash.php\"/>";
			 
		 }
      }
	
	echo "</table>";
	
	 
	 
	 
	
	
	?> </div><input type='submit'name='submit2' value='Delete Event'>
   
			<script type ="text/javascript">
			function mess() {
   alert(" Your event was added");
   return true;
}
</script>
        </form>
		<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    </div> 
	</div>
	</div>
   <!-- Social List -->
            <div class="card- body">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-handshake"></i>
				Community Service
                </h3>

              
              </div>
              <!-- /.card-header -->
            <div class="card-body">
			
			  
                <ul class="todo-list" data-widget="todo-list">
                   <form action="" method="post">
          <div class=container> 
             
	<?php 
	error_reporting(E_ERROR | E_PARSE); 
	$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
 
	$result=mysqli_query($con, "SELECT id, event, date, type, location ,TIME_FORMAT(Time, '%h:%i%p') as time from orgevents where Orgid='{$_SESSION['userid']}' and type ='community service'") or die("Bad Querey");
	

	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr>
	<td>Delete Event</td>
	<td>Event</td>
	<td>Location</td>
	<td>Date</td>
	<td>Type</td>
	<td>Time</td>
	 </tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{ $count=1;
	 $a="";
	$a ="c_";
	$a .= $row['id'];

	echo "<tr>	<td> <input type='checkbox' name='$a'></td>
                  <td>{$row['event']}</td>
                  <td>{$row['location']}</td> 
				  <td>{$row['date']}</td> 
				  <td>{$row['type']}</td>
				  <td>{$row['time']}</td>
                  
                  
               </tr>";
			   $count++;
			   
			   if(isset($_POST[$a])){
		$into=mysqli_query($con,"DELETE FROM orgevents WHERE Orgid='{$_SESSION['userid']}' AND Event= '{$row['event']}' ");	
		echo "<meta http-equiv=\"refresh\" content=\".5;url=orgDash.php\"/>";
			 
		 }
      }
	
	echo "</table>";
	
	 
	 
	 
	
	
	?> </div><input type='submit'name='submit2' value='Delete Event'>
			<script type ="text/javascript">
			function mess() {
   alert(" Your event was added");
   return true;
}
</script>
        </form>
		<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    </div> <!-- /container -->
</li>
 </ul>
</div> 
 <!-- Social List -->
            <div class="card- body">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-briefcase"></i>
				Career Opportunities
                </h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			
			  
                <ul class="todo-list" data-widget="todo-list">
                   <form action="" method="post">
          <div class=container> 
             
	<?php 
	error_reporting(E_ERROR | E_PARSE); 
	$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
 
	$result=mysqli_query($con, "SELECT event, date, type, location ,TIME_FORMAT(Time, '%h:%i%p') as time from orgevents where Orgid='{$_SESSION['userid']}' and type ='Career opportunities'") or die("Bad Querey");
	

	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr>
	<td>Delete Event</td>
	<td>Event</td>
	<td>Location</td>
	<td>Date</td>
	<td>Type</td>
	<td>Time</td>
	 </tr>\n";
	 
	while($row=mysqli_fetch_assoc($result))
	{$count=1;
	 $a="";
	$a ="d_";
	$a .= $row['id'];

	echo "<tr>	<td> <input type='checkbox' name='$a'></td>
                  <td>{$row['event']}</td>
                  <td>{$row['location']}</td> 
				  <td>{$row['date']}</td> 
				  <td>{$row['type']}</td>
				  <td>{$row['time']}</td>
                  
                  
               </tr>";
			   $count++;
			   
			   if(isset($_POST[$a])){
		$into=mysqli_query($con,"DELETE FROM orgevents WHERE Orgid='{$_SESSION['userid']}' AND Event= '{$row['event']}' ");	
		echo "<meta http-equiv=\"refresh\" content=\".5;url=orgDash.php\"/>";
			 
		 }
      }
	
	echo "</table>";
	
	 
	 
	 
	
	
	?> </div><input type='submit'name='submit2' value='Delete Event'>
    
   
			<script type ="text/javascript">
			function mess() {
   alert(" Your event was added");
   return true;
}
</script>
        </form>
		<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    </div> <!-- /container -->
</li>
 </ul>
</div> 
</body>
</html>
