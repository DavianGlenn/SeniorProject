<?php
if(isset($_POST["Interest"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase();
    }
	if(isset($_POST["Interest2"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase2();
    }
	if(isset($_POST["Interest3"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase3();
    }
	if(isset($_POST["Interest4"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase4();
    }
	if(isset($_POST["Interest5"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase5();
    };
	if(isset($_POST["Interest6"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase6();
    }
	if(isset($_POST["Interest7"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase7();
    }
	if(isset($_POST["Interest8"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase8();
    }
	if(isset($_POST["Interest9"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase9();
    }
	if(isset($_POST["Interest10"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase10();
    }
	;if(isset($_POST["Interest11"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase11();
    }
	if(isset($_POST["Interest12"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase12();
    }
	if(isset($_POST["Interest13"])){
        include_once 'CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase13();
    };
	

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>calendly | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="websiteTemplate/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="websiteTemplate/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="websiteTemplate/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<form  method="post" action="php/createUser.php">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index.html"><b>Calendly</b>For NCAT students</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      
        <div >
         <h1>What Do You Like To Do For Fun?</h1>
<h2>Please Select The Hobbies That Most Interest You</h2>
<div class="container">
        <form action="" method="post">
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
			<input type='submit' name="submit2" value='+Add Event'>
			</form>
		<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
     <!-- /container -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
