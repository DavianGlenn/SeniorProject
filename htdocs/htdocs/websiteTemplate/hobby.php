<?php  
session_start();
if(!isset($_SESSION['logged_in'])){ 
      header("Location:../index.html");}  

error_reporting(E_ALL & ~E_NOTICE); 

?>

<!DOCTYPE html>
<html>
<head>
<style media="screen">
    .containers { border:2px solid #ccc; width:350px; height: 100px; overflow-y: scroll;  position: left; background-color:#ffffff;}
	
	#customers {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	    font-size: 15px;
	  
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
  <title>Hobbies</title>
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
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
             Dashboard

            </p>
			<a href="pages/examples/profile.php" class="nav-link ">
            <i class="nav-icon fas fa-address-card"></i>
            <p>My profile</p></a>
			 
			
            <a href="pages/calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </a>
		  <a href="hobby.php" class="nav-link active">
            <i class="nav-icon far fa-thumbs-up"></i>
            <p>
            Hobbies

            </p>
			<a href="pages/examples/contacts.html" class="nav-link ">
            <i class="nav-icon fas fa-address-book"></i>
            <p>Contacts</p></a>
         
		  <a href="../Logout/logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
             Logout
              <span class="badge badge-info right"></span>
            </p>
</a>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
															<div class="container">
              
			  <div class="content-wrapper">
<h1>What Do You Like To Do For Fun?</h1>
<h2>Please Select The Hobbies That Most Interest You</h2>
<?php   
if(isset($_POST["Interest"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase();
    }
	if(isset($_POST["Interest2"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase2();
    }
	if(isset($_POST["Interest3"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase3();
    }
	if(isset($_POST["Interest4"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase4();
    }
	if(isset($_POST["Interest5"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase5();
    };
	if(isset($_POST["Interest6"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase6();
    }
	if(isset($_POST["Interest7"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase7();
    }
	if(isset($_POST["Interest8"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase8();
    }
	if(isset($_POST["Interest9"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase9();
    }
	if(isset($_POST["Interest10"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase10();
    }
	;if(isset($_POST["Interest11"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase11();
    }
	if(isset($_POST["Interest12"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase12();
    }
	if(isset($_POST["Interest13"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase13();
    };
?>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="checkbox" id="Interest" name="Interest" value="Sports">Sports<br/>
            <input type="checkbox" id="Interest" name="Interest2" value="Exercise">Exercise<br/>
            <input type="checkbox" id="Interest" name="Interest3" value="Dance">Dance<br/>
            <input type="checkbox" id="Interest" name="Interest4" value="Traveling">Traveling<br/>
            <input type="checkbox" id="Interest" name="Interest5" value="Video Games">Video Games<br/>
            <input type="checkbox" id="Interest" name="Interest6" value="Volunteering">Volunteering<br/>
            <input type="checkbox" id="Interest" name="Interest7" value="Painting">Painting<br/>
            <input type="checkbox" id="Interest" name="Interest8" value="Photography">Photography<br/>
            <input type="checkbox" id="Interest" name="Interest9" value="Cooking">Cooking<br/>
            <input type="checkbox" id="Interest" name="Interest10" value="Reading">Reading<br/>
            <input type="checkbox" id="Interest" name="Interest11" value="Creative Writing">Creative Writitng<br/>
            <input type="checkbox" id="Interest" name="Interest12" value="Science and Technology">Science and Technology<br/>
            <input type="checkbox" id="Interest" name="Interest13" value="Agriculture">Agriculture<br/>
          
            
            <br/><br/>
			
            <a href="index.php"><input type="submit" id="submit" name="submit" value="Update Hobbies" class="btn btn-primary"></a>
        </form>
		<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<div class=containers>
<?php
$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql = "SELECT user_interest from checkbox where userid = '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql) or die("Badd Query:$sql");
	echo "<table id='customers' border ='1'>";
	echo "<tr><td>Here's Your Hobbies</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['user_interest']}</td></tr>\n";
	}
	echo "</table>";
?>
</div>
    </div> <!-- /container -->
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
