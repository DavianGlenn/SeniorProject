<?php
session_start();
        
class academicsclass{
   
	public function showUsers(){
		$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql = "SELECT event_name from academic where userid = '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql) or die("Badd Query:$sql");
	echo "<table border ='1'>";
	echo "<tr><td>Here are the Social Events You Chose to Attend</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['event_name']}</td></tr>\n";
	}
	echo "</table>";
	
	
	



}

   
	public function showSocialEvents(){
		$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql2 = "SELECT event_name from socials where userid = '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql2) or die("Badd Query:$sql");
	echo "<table border ='1'>";
	echo "<tr><td>Here are the Social Events You Chose to Attend</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['event_name']}</td></tr>\n";
	}
	echo "</table>";
	
	}
	public function showCommServEvents(){
		$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql = "SELECT event_name from commserv where userid = '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql) or die("Badd Query:$sql");
	echo "<table border ='1'>";
	echo "<tr><td>Here are the Community Service Events You Chose to Attend</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['event_name']}</td></tr>\n";
	}
	echo "</table>";
	
	}
public function showCareerOppEvents(){
		$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql = "SELECT event_name from Careerop where userid = '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql) or die("Badd Query:$sql");
	echo "<table border ='1'>";
	echo "<tr><td>Here are the Career Opportunity Events You Chose to Attend</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['event_name']}</td></tr>\n";
	}
	echo "</table>";
	
	}
}
	





?>

