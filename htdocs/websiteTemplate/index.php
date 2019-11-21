<?php
include"../users.php";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
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
          <a> <?php if(isset($_SESSION['use'])){{ echo $_SESSION['use'];}} ?></a>
        </div>
      </div>


      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <a href="index.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
             Dashboard

            </p>
            <a href="pages/calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </a>
		   <a href="hobby.php" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Hobby Lobby

            </p>
         
		  <a href="../Logout/logout.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
             Logout
              <span class="badge badge-info right"></span>
            </p>

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <a href="php/academicEventsList.php" class="small-box-footer">View students going<i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="php/socialEventList.php" class="small-box-footer">View students going<i class="fas fa-arrow-circle-right"></i></a>
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
                <i class=" fa fa-money"></i>
              </div>
              <a href="php/csEventList.php" class="small-box-footer">View students going<i class="fas fa-arrow-circle-right"></i></a>
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
                  <i class="fas fa-users mr-1"></i>
				Academic                </h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			
			  
                <ul class="todo-list" data-widget="todo-list">
                  <li>
         <div class="card-body"> 
			<?php 
			
		
		 
		 //First Check box
		 if(isset($_POST["academics"])){
			  include_once 'php/academics.php';
			  $checkBoxClass=new academicsclass();
        echo $checkBoxClass->addtoDatabase();
		
		 }
		
		//Second Chek box
		 if(isset($_POST["academics2"])){
			  include_once 'php/academics.php';
			  $checkBoxClass=new academicsclass();
        echo $checkBoxClass->addtoDatabase2();
		 }
		
		//Third check box
		 if(isset($_POST["academics3"])){
			  include_once 'php/academics.php';
			  $checkBoxClass=new academicsclass();
        echo $checkBoxClass->addtoDatabase3();
		 }
		//Fourth Check box
		if(isset($_POST["academics4"])){
			 include_once 'php/academics.php';
			 $checkBoxClass=new academicsclass();
        echo $checkBoxClass->addtoDatabase4();
	}
		if(isset($_POST["academics5"])){
			 include_once 'php/academics.php';
			 $checkBoxClass=new academicsclass();
        echo $checkBoxClass->addtoDatabase5();
	}
	
	if(isset($_POST["academics6"])){
		 include_once 'php/academics.php';
		 $checkBoxClass=new academicsclass();
        echo $checkBoxClass->addtoDatabase6();
	}
		
		
	
	

	?>
        <form action="" method="post">
             
	<?php 
	include_once '../php/createEvent.php';
			 $checkBoxClass=new event_Class();
        echo $checkBoxClass->create();
	
	?>

 
    
    
   
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
</div>
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
                  <li>
         <div class="card-body"> <?php 
		  include_once 'php/social.php';
		 if(isset($_POST["Social"])){
        $checkBoxClass=new socialclass();
        echo $checkBoxClass->addtoDatabase();
		}
		
		if(isset($_POST["Social2"])){
        $checkBoxClass=new socialclass();
        echo $checkBoxClass->addtoDatabase2();
		}
		if(isset($_POST["Social3"])){
        $checkBoxClass=new socialclass();
        echo $checkBoxClass->addtoDatabase3();
		}
		if(isset($_POST["Social4"])){
        $checkBoxClass=new socialclass();
        echo $checkBoxClass->addtoDatabase4();
		}
		if(isset($_POST["Social5"])){
        $checkBoxClass=new socialclass();
        echo $checkBoxClass->addtoDatabase5();
		}
		if(isset($_POST["Social6"])){
        $checkBoxClass=new socialclass();
        echo $checkBoxClass->addtoDatabase6();
		}
		
		?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
              <table>
			  <tr>
      <th>Select Event(s)</th>
      <th data-th="Driver details"><span>Event Name</span></th>
      <th>Event Location</th>
      <th>Date</th>
      <th>Time</th>
    </tr>
    
    <tr>
      <td><input type="Checkbox"/ name="Social" value="Aggies at the Apollo Auditions"></td>
      <td>Aggies at the Apollo Auditions</td>
      <td>Paul Roberson Theatre</td>
      <td>11/20/2019</td>
      <td>5PM</td>
    </tr>
    
    <tr>
      <td><input type="Checkbox"/ name="Social2" value="A Night of Terror Haunted Festival" ></td>
      <td>A Night of Terror Haunted Festival</td>
      <td>Merrick Hall</td>
      <td>11/01/2019</td>
      <td>7PM</td>
    </tr>
    
    <tr>
      <td><input type="Checkbox"/ name="Social3" value="Laugh out Loud" ></td>
      <td>Laugh out Loud</td>
      <td>Corbett Sports Center</td>
      <td>11/23/2019</td>
      <td>7PM</td>
    </tr>
    
    <tr>
      <td><input type="Checkbox"/ name="Social4" value="Game Night" ></td>
      <td>Game Night</td>
      <td>NCAT Student Center</td>
      <td>11/30/2019</td>
      <td>6PM</td>
    </tr>
	
	 <tr>
      <td><input type="Checkbox"/ name="Social5" value="Aggie Bazaar" ></td>
      <td>Aggie Bazaar</td>
      <td>Park and Ride Lot</td>
      <td>11/25/2019</td>
      <td>1PM</td>
    </tr>
	
	 <tr>
      <td><input type="Checkbox"/ name="Social6" value="Aggie Pregame" ></td>
      <td>Aggie Pregame</td>
      <td>Corbett Sports Center</td>
      <td>11/24/2019</td>
      <td>4PM</td>
    </tr>
    
  </table>
           <input type='submit'name="submit2" value='+Add Event' onclick='btnClick();' class="return mess();">
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
                  <i class="fas fa-users mr-1"></i>
				Community Service
                </h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			
			  
                <ul class="todo-list" data-widget="todo-list">
                  <li>
         <div class="card-body"> <?php 
		include_once 'php/communityservice.php';
			if(isset($_POST["commserv"])){
			$checkBoxClass=new csclass();
			echo $checkBoxClass->addtoDatabase();
		}
		
		if(isset($_POST["commserv2"])){
			$checkBoxClass=new csclass();
			echo $checkBoxClass->addtoDatabase2();
		}
		
		if(isset($_POST["commserv3"])){
			$checkBoxClass=new csclass();
			echo $checkBoxClass->addtoDatabase3();
		}
		
		if(isset($_POST["commserv4"])){
			$checkBoxClass=new csclass();
			echo $checkBoxClass->addtoDatabase4();
		}
		
		if(isset($_POST["commserv5"])){
			$checkBoxClass=new csclass();
			echo $checkBoxClass->addtoDatabase5();
		}
		
		if(isset($_POST["commserv6"])){
			$checkBoxClass=new csclass();
			echo $checkBoxClass->addtoDatabase6();
		}
		?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
           <table>
		   <tr>
      <th>Select Event(s)</th>
      <th data-th="Driver details"><span>Event Name</span></th>
      <th>Event Location</th>
      <th>Date</th>
      <th>Time</th>
    </tr>
    
    <tr>
      <td><input type="Checkbox"/ name="commserv" value="Winter Clothing Drive"></td>
      <td>Winter Clothing Drive</td>
      <td>Student Center</td>
      <td>11/03/2019</td>
      <td>6PM</td>
    </tr>
    
    <tr>
      <td><input type="Checkbox"/ name="commserv2" value="Clean A Side Walk" ></td>
      <td>Clean a Side Walk</td>
      <td>Gibbs Hall</td>
      <td>11/03/2019</td>
      <td>4PM</td>
    </tr>
    
    <tr>
      <td><input type="Checkbox"/ name="commserv3" value="STEM Mentorship Program" ></td>
      <td>STEM Mentorship Program</td>
      <td>McCain Hall</td>
      <td>11/15/2019</td>
      <td>5PM</td>
    </tr>
    
    <tr>
      <td><input type="Checkbox"/ name="commserv4" value="Breast Cancer Walk" ></td>
      <td>Breast Cancer Walk</td>
      <td>Corbett Sports Center</td>
      <td>11/07/2019</td>
      <td>7PM</td>
    </tr>
	
	 <tr>
      <td><input type="Checkbox"/ name="commserv5" value="Children's Book Reading" ></td>
      <td>Children's Book Reading</td>
      <td>Child Development Laboratory</td>
      <td>11/08/2019</td>
      <td>3PM</td>
    </tr>
	
	 <tr>
      <td><input type="Checkbox"/ name="commserv6" value="Food Pantry Drive" ></td>
      <td>Food Pantry Drive</td>
      <td>Williams Dining Hall</td>
      <td>11/18/2019</td>
      <td>2PM</td>
    </tr>
    
  </table>

            <input type='submit' name="submit3" value='+Add Event' onclick='btnClick();' class="return mess();">
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
</div> <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         </ul>
          <!-- Buddy List -->
           <div class="card-body">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-cloud mr-1"></i>
                <h3 class="card-title">
                  <i class="fas fa-list-ul mr-1"></i>
                  Buddy List
                </h3>
				<div class="card-body">
		<?php  
		 $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$sql =mysqli_query($conn, "select First_Name, Email, userid, count(Event_ID) from checkbox, user_account \n"

    . "where event_id in(\n"

    . "Select Event_ID from checkbox where userid ='{$_SESSION['userid']}'\n"

    . "    ) and userid != '{$_SESSION['userid']}' and userid=user_account.ID\n"

    . "Group by userid,First_Name, Email\n"

    . "Having count(Event_ID)>=3  \n"

    . "ORDER BY `checkbox`.`userid`"
);
	echo "<table border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr><td>Here are your Buddies</td> <td>Email</td> 
	 </tr>\n";
	while($row=mysqli_fetch_assoc($sql))
	{
		
	 echo "<tr><td>{$row['First_Name']}</td><td>{$row['Email']}</td></tr>";
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
