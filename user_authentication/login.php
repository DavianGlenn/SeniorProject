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
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Enter Login Details</td>
			</tr>
			<tr class="tablerow">
			<td>Username
			<input type="text" name="Username" placeholder="User Name" class="login-input"></td>
			</tr>
			<tr class="tablerow">
			<td>Password
			<input type="password" name="Password" placeholder="Password" class="login-input"></td>
			</tr>
			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
			<div class="text-center p-t-136">
						<a class="txt2" href="../CreateAccount/CreateAccount.html">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
		</table>
</form>
</body></html>