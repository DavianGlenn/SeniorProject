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
date_default_timezone_set("America/New_York");
$current = date('m/d/Y h:i:s a', time());
if(empty($Event) || empty($Locate) || empty($Time) || empty($Date))
{
    echo "You did not fill out the required fields.";
	echo  "<meta http-equiv=\"refresh\" content=\"2;url=../createEvent.html\"/>";
} else{
$check=mysqli_query($con,"select * from orgevents  where event='$Event' and orgID='{$_SESSION['userid']}' and date ='$Date' and Time='$Time' ");
$count = mysqli_num_rows($check);

$answer = $_POST['Event'];  

if($count){
	
	echo"This Event Has Already Been Registered";
	echo "<meta http-equiv=\"refresh\" content=\"2;url=../createEvent.html\"/>";  
}else{

if ($answer == "Academic"){
$type='Academic';	
$query=mysqli_query($con,"insert into orgevents (Event,org_name,Type,Date,Location,Time,orgID,created,modified,status) values ('$Event','{$_SESSION['use']}','$type','$Date','$Locate','$Time','{$_SESSION['userid']}','$current','$current','1') ");
echo "<meta http-equiv=\"refresh\" content=\"2;url=../createEvent.html\"/>";
}
if ($answer == "Social"){
$type='Social';	
$query=mysqli_query($con,"insert into orgevents (Event,org_name,Type,Date,Location,Time,orgID,created,modified,status) values ('$Event','{$_SESSION['use']}','$type','$Date','$Locate','$Time','{$_SESSION['userid']},'$current','$current','1') ");
echo "<meta http-equiv=\"refresh\" content=\"2;url=../createEvent.html\"/>";
}
if ($answer == "Community Service"){
$type='Community Service';	
$query=mysqli_query($con,"insert into orgevents (Event,org_name,Type,Date,Location,Time,orgID,created,modified,status) values ('$Event','{$_SESSION['use']}','$type','$Date','$Locate','$Time','{$_SESSION['userid']}','$current','$current','1') ");
echo "<meta http-equiv=\"refresh\" content=\"2;url=../createEvent.html\"/>";
}
if ($answer == "Career Opportunities"){
$type='Career Opportunities';	
$query=mysqli_query($con,"insert into orgevents (Event,org_name,Type,Date,Location,Time,orgID,created,modified,status) values ('$Event','{$_SESSION['use']}','$type','$Date','$Locate','$Time','{$_SESSION['userid']}','$current','$current','1') ");
echo "<meta http-equiv=\"refresh\" content=\"2;url=../createEvent.html\"/>";
}

}

}


?>
















