<?php
session_start();

 if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"SELECT org_id, org_name FROM org_account WHERE org_name='" . $_POST['OrgName'] . "' and Password = '". $_POST['Password']."'");
	$count  = mysqli_num_rows($result);
	
		 if($count==0) {
		$message = "Invalid Username or Password! Please Try Again.";
		
		
		echo  $message;
		

		echo  "<meta http-equiv=\"refresh\" content=\"2;url=orgLogin.html\"/>";  
		
	} else {
	  session_start();
    $_SESSION['logged_in'] = true;
		   $row = mysqli_fetch_array($result);
		   $_SESSION['use']=$row[1];
		   $_SESSION['userid']=$row[0];
		   echo $_SESSION['use'];
	
echo  "<meta http-equiv=\"refresh\" content=\"2;url=websiteTemplate\orgDash.php\"/>";           //  On Successful Login redirects to dashboard
	echo "logged in";
}		 

 
 
 }