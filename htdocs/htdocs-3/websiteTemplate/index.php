<?php
include"../users.php";
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
          <a href="pages/examples/profile.php"> <?php if(isset($_SESSION['use'])){{ echo $_SESSION['use'];}} ?></a>
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
			
			<a href="pages/examples/profile.php" class="nav-link ">
            <i class="nav-icon fas fa-address-card"></i>
            <p>My profile</p></a>
			 
			<a href="hobby.php" class="nav-link ">
            <i class="nav-icon far fa-thumbs-up"></i>
            <p>Hobbies</p></a>
            
            
		
           
		    <a href="pages/calendar.php" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>Calendar</p></a>
           
			
			<a href="pages/examples/contacts.html" class="nav-link ">
            <i class="nav-icon fas fa-address-book"></i>
            <p>Contacts</p></a>
        
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
            <h1 class="m-0 text-dark">Dashboard</h1>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>



                <p>Academics</p>
              </div>
              <div class="icon">
                <i class=" fas fa-graduation-cap"></i>
              </div>
              <a href="pages/examples/whosGoing.php" class="small-box-footer">View students going<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px"></sup></h3>

                <p>Social</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="pages/examples/whosGoing.php" class="small-box-footer">View students going<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Community Service</p>
              </div>
              <div class="icon">
                <i class=" fa fa-handshake"></i>
              </div>
              <a href="pages/examples/whosGoing.php" class="small-box-footer">View students going<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3></h3>

                <p>Career Opportunities</p>
              </div>
              <div class="icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <a href="https://ncat-csm.symplicity.com/students/?signin_tab=0" class="small-box-footer">Aggie Link <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
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
 
	$result=mysqli_query($con, "SELECT date_format(Date, '%Y-%m-%d') as Date ,TIME_FORMAT(Time, '%h:%i%p') as time,org_name,orgID,event,Location From orgevents where type = 'Academic' ") or die("Bad Querey");
	

	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr>
	<td>Select Event</td>
	
	<td>Organization Name</td>
	<td>Event</td> 
	<td>Event Location</td> 
	
	<td>Date</td> 
	<td>Time</td> </tr>\n";
	while($row=mysqli_fetch_assoc($result))
	{
	$a="";
	$a ="n_";
	$a .= $count2;
	$orgID=$row['orgID'];

	echo "<tr></tr><tr>
	<td><input type='checkbox' name='$a'></td>
                  <td>{$row['org_name']}</td>
                  <td>{$row['event']}</td>
				  
				  
                  <td>{$row['Location']}</td>
                  <td>{$row['Date']}</td>
                  <td>{$row['time']}</td>
                  
                  
               </tr>";
         $count2++; 	
		 
	if(isset($_POST[$a])){
		$result2 = mysqli_query($con,"SELECT * FROM `calendarevents` WHERE userid='{$_SESSION['userid']}' and title='{$row['event']}'");
		$check=mysqli_num_rows($result2);
		if(!$check){
		echo "{$row['event']} has been added to your calendar.";
		$into=mysqli_query($con,"INSERT INTO calendarevents( title,userid,status,date,orgID,org_name, username) value ('{$row['event']}','{$_SESSION['userid']}','1','{$row['Date']}','$orgID','{$row['org_name']}','{$_SESSION['use']}')");	 
		 }else{
			 
			 echo "{$row['event']} has already been added to your calendar.";
		 }
	}
      }
	
	echo "</table>";
	
	 
	 
	 
	
	 
	
	?></div><input type='submit'name='submit2' value='+Add Event' onclick='btnClick();'>
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
	$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
 
	$result=mysqli_query($con, "SELECT date_format(Date, '%a %b %D %Y') as Date ,TIME_FORMAT(Time, '%h:%i%p') as time,org_name,orgID,event,Location From orgevents where type = 'Social' ") or die("connection error");
	

	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr>
	<td>Select Event</td>
	
	<td>Organization Name</td>
	<td>Event</td> 
	<td>Event Location</td> 
	
	<td>Date</td> 
	<td>Time</td> </tr>\n";
	$count3 =1;
	while($row=mysqli_fetch_assoc($result))
	{
	$a="";
	$a ="n_";
	$a .= $count3;
	$orgID=$row['orgID'];

	echo "<tr></tr><tr>
	<td><input type='checkbox' name='$a'></td>
                  <td>{$row['org_name']}</td>
                  <td>{$row['event']}</td>
				  <td>{$row['Location']}</td>
				  
                  
                  <td>{$row['Date']}</td>
                  <td>{$row['time']}</td>
                  
                  
               </tr>";
         $count3++; 	
		 
	if(isset($_POST[$a])){
		$result2 = mysqli_query($con,"SELECT event_name, userid,orgID,org_name,username FROM socials WHERE org_name='{$row['org_name']}' and orgID='$orgID' and event_name='{$row['event']}' and userid='{$_SESSION['userid']}' and username='{$_SESSION['use']}'");
		$check=mysqli_num_rows($result2);
		if(!$check){
		echo "{$row['event']} has been added to your calendar.";
		$into=mysqli_query($con,"INSERT INTO socials( event_name, userid,orgID,org_name, username) value ('{$row['event']}','{$_SESSION['userid']}','$orgID','{$row['org_name']}','{$_SESSION['use']}')");	 
		 }else{
			 
			 echo "{$row['event']} has already been added to your calendar.";
		 }
	}
      }
	
	echo "</table>";
	
	 
	 
	 
	
	 
	
	?>
 
    </div>
								<input  type='submit'name='submit2' value='+Add Event' onclick='btnClick();'>
   
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
	$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
 
	$result=mysqli_query($con, "SELECT date_format(Date, '%a %b %D %Y') as Date ,TIME_FORMAT(Time, '%h:%i%p') as time,org_name,orgID,event,Location From orgevents where type = 'Community Service'") or die("connection error");
	

	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr>
	<td>Select Event</td>
	
	<td>Organization Name</td>
	<td>Event</td> 
	<td>Event Location</td> 
	
	<td>Date</td> 
	<td>Time</td> </tr>\n";
	$count4 =1;
	while($row=mysqli_fetch_assoc($result))
	{
	$a="";
	$a ="n_";
	$a .= $count4;
	$orgID=$row['orgID'];

	echo "<tr></tr><tr>
	<td><input type='checkbox' name='$a'></td>
                  <td>{$row['org_name']}</td>
                  <td>{$row['event']}</td>
				  
				  
                  <td>{$row['Location']}</td>
                  <td>{$row['Date']}</td>
                  <td>{$row['time']}</td>
                  
                  
               </tr>";
         $count4++; 	
		 
	if(isset($_POST[$a])){
		$result2 = mysqli_query($con,"SELECT event_name, userid,orgID,org_name,username FROM commserv WHERE org_name='{$row['org_name']}' and orgID='$orgID' and event_name='{$row['event']}' and userid='{$_SESSION['userid']}' and username='{$_SESSION['use']}'");
		$check=mysqli_num_rows($result2);
		if(!$check){
		echo "{$row['event']} has been added to your calendar.";
		$into=mysqli_query($con,"INSERT INTO commserv( event_name, userid,orgID,org_name, username) value ('{$row['event']}','{$_SESSION['userid']}','$orgID','{$row['org_name']}','{$_SESSION['use']}')");	 
		 }else{
			 
			 echo "{$row['event']} has already been added to your calendar.";
		 }
	}
      }
	
	echo "</table>";
	
	
	 
	 
	
	 
	
	?>

  </div>  
    <input type='submit'name='submit2' value='+Add Event' onclick='btnClick();'>
   
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
	$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
 
 
	$result=mysqli_query($con, "SELECT date_format(Date, '%a %b %D %Y') as Date ,TIME_FORMAT(Time, '%h:%i%p') as time,org_name,orgID,event,Location From orgevents where type = 'Career Opportunities'") or die("connection error");
	$Time=date("g:i a", strtotime("Time"));

	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr>
	<td>Select Event</td>
	
	<td>Organization Name</td>
	<td>Event</td> 
	<td>Event Location</td> 
	
	<td>Date</td> 
	<td>Time</td> </tr>\n";
	$count =1;
	while($row=mysqli_fetch_assoc($result))
	{
	$a="";
	$a ="n_";
	$a .= $count;
	$orgID=$row['orgID'];

	echo "<tr></tr><tr>
	<td><input type='checkbox' name='$a'></td>
                 <td>{$row['org_name']}</td>
                  <td>{$row['event']}</td>
				  
				  
                  <td>{$row['Location']}</td>
                  <td>{$row['Date']}</td>
                  <td>{$row['time']}</td>
                  
                  
               </tr>";
         $count++; 	
		 
	if(isset($_POST[$a])){
		$result2 = mysqli_query($con,"SELECT event_name, userid,orgID,org_name,username FROM commserv WHERE org_name='{$row['org_name']}' and orgID='$orgID' and event_name='{$row['event']}' and userid='{$_SESSION['userid']}' and username='{$_SESSION['use']}'");
		$check=mysqli_num_rows($result2);
		if(!$check){
		echo "{$row['event']} has been added to your calendar.";
		$into=mysqli_query($con,"INSERT INTO commserv( event_name, userid,orgID,org_name, username) value ('{$row['event']}','{$_SESSION['userid']}','$orgID','{$row['org_name']}','{$_SESSION['use']}')");	 
		 }else{
			 
			 echo "{$row['event']} has already been added to your calendar.";
		 }
	}
      }
	
	echo "</table>";
	
	 
	 
	 
	
	 
	
	?>
	
 </div>
    <input type='submit'name='submit2' value='+Add Event' onclick='btnClick();'>
    
   
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

          <!-- Buddy List -->
           <div class="card-body">
              <div class="card-header">
                <h3 class="card-title">
                <h3 class="card-title">
                  <i class="fas fa-user-plus"></i>
                  Buddy List
                </h3>
				<div class="card-body">
				<div class="card-header">
			
			  
                <ul class="todo-list" data-widget="todo-list">
                   <form action="" method="post">
          <div class=container> 
				
		<?php  
		 $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$sql =mysqli_query($conn, "select First_Name,Last_Name, Email, userid, count(Event_ID) from checkbox, user_account \n"

    . "where event_id in(\n"

    . "Select Event_ID from checkbox where userid ='{$_SESSION['userid']}'\n"

    . "    ) and userid != '{$_SESSION['userid']}' and userid=user_account.ID\n"

    . "Group by userid,First_Name, Email\n"

    . "Having count(Event_ID)>=3  \n"

    . "ORDER BY `checkbox`.`userid`"
);
	echo "<table id='customers' border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr><td>Here are your Buddies</td> <td>Email</td> 
	 </tr>\n";
	while($row=mysqli_fetch_assoc($sql))
	{
		
	 echo "<tr><td>{$row['First_Name']}</td><td>{$row['Last_Name']}</td><td>{$row['Email']}</td></tr>";
	}
	echo "</table>";
		?>
	</div>


<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
