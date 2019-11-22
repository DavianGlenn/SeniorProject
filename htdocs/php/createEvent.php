<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Senior Project";
// Create connection
 $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname) ;
 $Event = filter_input(INPUT_POST, 'Org_Event');
$Locate= filter_input(INPUT_POST,'Place');
$Time= filter_input(INPUT_POST, 'Time');
$Date = filter_input(INPUT_POST, 'Date');
if(isset($_POST["Event"])){
$type='Academic';
$query=mysqli_query($con,"insert into orgevents (Event,Type,Date,Location,Time,orgID) values ('$Event','$type','$Date','$Locate','$Time','{$_SESSION['use']}') ");
}
if(isset($_POST["Event2"])){
$type='Social';
$query=mysqli_query($con,"insert into orgevents (Event,Type,Date,Location,Time,orgID) values ('$Event','$type','$Date','$Locate','$Time','{$_SESSION['use']}') ");
}
if(isset($_POST["Event3"])){
$type='Community Service';
$query=mysqli_query($con,"insert into orgevents (Event,Type,Date,Location,Time,orgID) values ('$Event','$type','$Date','$Locate','$Time','{$_SESSION['use']}') ");
}
if(isset($_POST["Event4"])){
$type='Career Opportunities';
$query=mysqli_query($con,"insert into orgevents (Event,Type,Date,Location,Time,orgID) values ('$Event','$type','$Date','$Locate','$Time','{$_SESSION['use']}') ");
}






?>
