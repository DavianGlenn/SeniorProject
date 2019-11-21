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
$query=mysqli_query($con,"insert into orgevents (Event,Type,Date,Location,Time,orgID) values ('$Event','$type','$Date','$Locate','$Time','666666') ");
}
class event_Class{

public function create(){
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

	$result=mysqli_query($con, "SELECT event,Location,Date,Time From orgevents where type = 'Academic' ") or die("connection error");
	

	echo "<table border =''>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	echo "<tr><td>Select Event</td> 
	<td>Event Location</td> 
	<td>Date</td> 
	<td>Time</td> </tr>\n";
	while($row=mysqli_fetch_assoc($result))
	{
		
	 echo "<tr><td><input type=checkbox>" . $row['event'] . "</td><td>" . $row['Location'] . "</td><td>" . $row['Date'] . "</td><td>" . $row['Time'] . "</td></tr>";
	}
	echo "</table>";
	 echo "<input type='submit'name='submit2' value='+Add Event' onclick='btnClick();'>";
	if(isset($_POST["submit2"])){
		$into=mysqli_query($con,"INSERT INTO academic( 'events', 'userid') SELECT o.ID, u.ID from orgevents o, user_account u where o.Type = 'academic' and u.ID ='{$_SESSION['userid']}'");
	}
	
	}
}

//if(isset($_POST["Event2"])){
//	$type='Social';
//}
//if(isset($_POST["Event3"])){
//	$type='Community Service';
//}
//if(isset($_POST["Event4"])){
//	$type='Career Opportunities';
//}

//$check=mysqli_query($con,"select * from orgevents where Event='$Event' and OrgID='{$_SESSION['org']}' ");
//$count=mysqli_num_rows($check);
 


//$query=mysqli_query($con,"insert into orgevents (Event,Type,Location,Time,orgID) values ('$Event','$type','$Locate','$Time','{$_SESSION['userid']}') ");


?>
















