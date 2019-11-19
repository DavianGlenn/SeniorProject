<?php
session_start();

 if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"SELECT id, Username FROM user_account WHERE Username='" . $_POST['Username'] . "' and Password = '". $_POST['Password']."'");
	$count  = mysqli_num_rows($result);
	
		 if($count==0) {
		$message = "Invalid Username or Password! Please Try Again.";
		
		
		echo  $message;
		

		echo  "<meta http-equiv=\"refresh\" content=\"2;url=index.html\"/>";  
		
	} else {
	  
		   $row = mysqli_fetch_array($result);
		   $_SESSION['use']=$row[1];
		   $_SESSION['userid']=$row[0];
	
echo  "<meta http-equiv=\"refresh\" content=\"2;url=websiteTemplate/index.php\"/>";           //  On Successful Login redirects to dashboard

}		 

 
 
 }

?>