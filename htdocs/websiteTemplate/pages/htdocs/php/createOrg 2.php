<?php
error_reporting(E_ERROR | E_PARSE); 
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
$orgname = filter_input(INPUT_POST, 'Org_Name');
$email = filter_input(INPUT_POST, 'Email');
$password= filter_input(INPUT_POST, 'Password');
if(empty($orgname) || empty($email) || empty($password) )
{
    echo "You did not fill out the required fields.";
	echo  "<meta http-equiv=\"refresh\" content=\"2;url=../orgRegistration.html\"/>";
} 

$check=mysqli_query($con,"select * from org_account where org_name='$orgname' and email='$email' ");
$count=mysqli_num_rows($check);
if($count){
	echo "This organization is already registered";
	echo "<meta http-equiv=\"refresh\" content=\"2;url=../orgRegistration.html\"/>";
		 

 // display when user is added
      
		 }else{
			 $query=mysqli_query($con, "INSERT INTO org_account (org_name, email,Password) values ('$orgname','$email','$password')");

		$result2 = mysqli_query($con,"SELECT org_id, org_name FROM org_account WHERE org_name='$orgname' and email='$email'");
		$row = mysqli_fetch_array($result2);
		   $_SESSION['use']=$row[1];
		   $_SESSION['userid']=$row[0];
		   echo $_SESSION['use'];
		echo  "Org Was Added";
echo "<meta http-equiv=\"refresh\" content=\"2;url=../createEvent.html\"/>";		
		 }
		 





?>