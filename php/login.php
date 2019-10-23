<?php
session_start();
if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("session.php"); 
 }
 if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"SELECT * FROM user_account WHERE Username='" . $_POST['Username'] . "' and Password = '". $_POST['Password']."'");
	$count  = mysqli_num_rows($result);
	
if($count==0) {
		$message = "Invalid Username or Password!";
		echo $message;
	} else {
if(isset($_POST['submit']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['Username'];
     $pass = $_POST['Password'];

      if($user == $user && $pass == $pass)  // username is  set to who ever is logged in. 
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;


         echo $user ; 
			
		  echo '<script type="text/javascript"> window.open("session.php","_self");</script>';           //  On Successful Login redirects to home.php
		
		 }
        else
        {
            echo "invalid UserName or Password";        
        }

 }
 
 }
 }
?>
