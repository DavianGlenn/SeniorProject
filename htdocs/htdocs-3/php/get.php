<?php
error_reporting(E_ERROR | E_PARSE); 
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
$id=mysqli_query($con,"select * event from orgevents where orgID='{$_SESSION['userid']}'");
echo $username;

$return = $_GET;
echo json_encode($return);
//$check=mysqli_query($con,"select * from orgevents where Event='$Event' and OrgID='{$_SESSION['org']}' ");
//$count=mysqli_num_rows($check);
 
//$query=mysqli_query($con,"insert into orgevents (Event,Type,Date,Location,Time,orgID) values ('$Event','$type','$Date','$Locate','$Time','{$_SESSION['userid']}') ");
//$query=mysqli_query($con,"insert into orgevents (Event,Type,Location,Time,orgID) values ('$Event','$type','$Locate','$Time','{$_SESSION['userid']}') ");

?>

