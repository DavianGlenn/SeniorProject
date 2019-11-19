<?php
error_reporting(E_ERROR | E_PARSE); 
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
$firstname = filter_input(INPUT_POST, 'First_Name');
$lastname = filter_input(INPUT_POST, 'Last_Name');
$username = filter_input(INPUT_POST, 'Username');
$email = filter_input(INPUT_POST, 'Email');
$phonenumber = filter_input(INPUT_POST, 'Phone_Number');
$password= filter_input(INPUT_POST, 'Password');
 if(empty($firstname) || empty($lastname) || empty($username) || empty($email)|| empty($phonenumber)|| empty($password))
{
    echo "You did not fill out the required fields.";
	echo  "<meta http-equiv=\"refresh\" content=\"2;url=../register.html\"/>";
} 
$check=mysqli_query($con,"select id from user_account where Username=$username and email=$email ");
 
		 if($check == false){
	$query= $con->prepare ( "INSERT INTO user_account (Username, Password,First_Name,Last_Name,email,Phone_Number) values ('$username','$password','$firstname','$lastname','$email','$phonenumber')");
$query -> bind_param("ssssss",$username,$password,$firstname,$lastname,$email,$phonenumber);
if($query->execute()){
        echo"<center><strong>User added! Now Lets Head To The Hobby Lobby! </strong></center>";
		$result = mysqli_query($con,"SELECT id, Username FROM user_account WHERE Username='$username' and Password = '$password'");
		$row = mysqli_fetch_array($result);
		   $_SESSION['use']=$row[1];
		   $_SESSION['userid']=$row[0];
		   echo $_SESSION['use'];
		echo  "<meta http-equiv=\"refresh\" content=\"2;url=../hobbies.html\"/>";
    }
}
 // display when user is added
        else{
            echo "This user is already registered please login ";
	echo "<meta http-equiv=\"refresh\" content=\"2;url=../index.html\"/>";

        }





?>