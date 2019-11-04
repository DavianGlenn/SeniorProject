<?php

$firstname = filter_input(INPUT_POST, 'First_Name');
$lastname = filter_input(INPUT_POST, 'Last_Name');
$username = filter_input(INPUT_POST, 'Username');
$email = filter_input(INPUT_POST, 'Email');
$phonenumber = filter_input(INPUT_POST, 'Phone_Number');
$password= filter_input(INPUT_POST, 'Password');
 
 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection

 
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;

if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
else{
	echo "IGNORE THIS MESSAGE PLEASE";
}

$query= $con->prepare ( "INSERT INTO user_account (Username, Password,First_Name,Last_Name,email,Phone_Number)
values ('$username','$password','$firstname','$lastname','$email','$phonenumber')");
$query -> bind_param("ssssss",$username,$password,$firstname,$lastname,$email,$phonenumber);
if ($query->execute()){
        echo"<center><strong>User added! </strong></center>";
		echo '<a href="../index.html">Click here</a>';
    } // display when user is added
        else{
            echo"Error in adding user!"; // display when there is error
        }







?>