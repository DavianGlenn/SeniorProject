<?php
session_start();

 if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"SELECT * FROM user_account WHERE Username='" . $_POST['Username'] . "' and Password = '". $_POST['Password']."'");
	$count  = mysqli_num_rows($result);
	
	   $user = $_POST['Username'];
     $pass = $_POST['Password'];
	
if($count==0) {
		$message = "Invalid Username or Password!";
		echo $message;
		echo '<script type="text/javascript"> window.open("../index.html","_self");</script>';  
	} else {
		if(isset($_SESSION[$user]))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("../websiteTemplate/index.html"); 
 }
if(isset($_POST['submit']))   // it checks whether the user clicked login button or not 
{
     
	 

      if($user==$user && $pass==$pass)  // username is  set to who ever is logged in. 
         {                                   // is 1234 by default     


		  
		   $_SESSION['use']=$user;
$n=10; 
function getName($n) { 
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	$randomString = ''; 

	for ($i = 0; $i < $n; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomString .= $characters[$index]; 
		$randomString;
		$_SESSION['valid']=$randomString;
	} 

	return $_SESSION['valid'];
} 

echo getName($n);
echo $user;




 
		  echo '<script type="text/javascript"> window.open("websiteTemplate/index.php","_self");</script>';           //  On Successful Login redirects to home.php

		 }
        else
        {
            echo "invalid UserName or Password";        
        }

 }
 
 }

 }
?>