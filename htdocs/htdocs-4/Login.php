<?php


 if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"SELECT id, Username FROM user_account WHERE Username='" . $_POST['Username'] . "' and Password = '". $_POST['Password']."'");
	$result2 = mysqli_query($conn,"SELECT First_Name,Last_Name FROM user_account WHERE Username='" . $_POST['Username'] . "' and Password = '". $_POST['Password']."'");
	$count  = mysqli_num_rows($result);
	
		 if($count==0) {
		$message = "Invalid Username or Password! Please Try Again.";
		
		
		echo  $message;
		

		echo  "<meta http-equiv=\"refresh\" content=\"2;url=index.html\"/>";  
		
	} else {
	  session_start();
    $_SESSION['logged_in'] = true;
		   $row = mysqli_fetch_array($result);
		   $row2 = mysqli_fetch_array($result2);
		   $_SESSION['use']=$row[1];
		   $_SESSION['userid']=$row[0];
		   $_SESSION['First']=$row2[0];
		   $_SESSION['Last']=$row2[1];
		   
		   
	
echo  "<meta http-equiv=\"refresh\" content=\"2;url=websiteTemplate/index.php\"/>";           //  On Successful Login redirects to dashboard

}		 

 
 
 }

?>