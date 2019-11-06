<?php
    
class csclass{
		   public function addtoDatabase($value){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into community_service (events,userid) values ('$value','{$_SESSION['userid']}')");
       

		   }}
	   
?>
