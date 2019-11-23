<?php
session_start();

class orgs{
public function showCalendar(){
	$conn = mysqli_connect("localhost","root","","Senior Project");
	$check=mysqli_query($conn, "Select date_format(Date, '%a %D %b %Y') as formatted_date from  orgevents where OrgID='{$_SESSION['userid']}'");

	echo "<table border =''>";
	echo "<caption>Here are the Events You Registered</caption>";
	echo "<td> Event</td> 
	<td>Type Of Event</td> 
	<td>Date</td> 
	<td>Location</td> 
	<td>Time</td> </tr>\n";
	while($row=mysqli_fetch_assoc($check))
	{
		echo"<tr><td> {$row['Event']}</td>";
		echo"<td> {$row['Type']}</td>";
		echo"<td> {$row['Date']}</td>";
		echo"<td> {$row['Location']}</td>";
		echo"<td> {$row['Time']}</td></tr>";
		
	}
	echo "</table>";
	
	}
public function showAcademic(){

$conn = mysqli_connect("localhost","root","","Senior Project");
$sql = mysqli_query($conn, "SELECT username,event_name from academic where OrgID='{$_SESSION['userid']}'");
	echo "<caption>Here Are The Users Going To The Academic Events Your Organization Has Registered</caption>";
	echo "<table border =''>";
	
	echo "<td> User</td> 
	<td>Event</td> 
	 </tr>\n";
	while($row=mysqli_fetch_assoc($sql))
	{
		echo"<tr><td> {$row['username']}</td>";
		echo"<td> {$row['event_name']}</td>";
		
		
	}
	echo "</table>";
	
	
}
public function showSocials(){

$conn = mysqli_connect("localhost","root","","Senior Project");
$sql = mysqli_query($conn, "SELECT username,event_name from socials where OrgID='{$_SESSION['userid']}'");
	echo "<caption>Here Are The Users Going To The Socials Events Your Organization Has Registered</caption>";
	echo "<table border =''>";
	
	echo "<td> User</td> 
	<td>Event</td> 
	 </tr>\n";
	while($row=mysqli_fetch_assoc($sql))
	{
		echo"<tr><td> {$row['username']}</td>";
		echo"<td> {$row['event_name']}</td>";
		
		
	}
	echo "</table>";
	
	
}
public function showCommServ(){

$conn = mysqli_connect("localhost","root","","Senior Project");
$sql = mysqli_query($conn, "SELECT username,event_name from commserv where OrgID='{$_SESSION['userid']}'");
	echo "<caption>Here Are The Users Going To The Socials Events Your Organization Has Registered</caption>";
	echo "<table border =''>";
	
	echo "<td> User</td> 
	<td>Event</td> 
	 </tr>\n";
	while($row=mysqli_fetch_assoc($sql))
	{
		echo"<tr><td> {$row['username']}</td>";
		echo"<td> {$row['event_name']}</td>";
		
		
	}
	echo "</table>";
	
	
}

}
?>