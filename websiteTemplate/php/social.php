<?php
        
class socialclass{
		   public function addtoDatabase($value){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into social (events,userid) values ('$value','{$_SESSION['userid']}')");
       

		   }}
	   
?>
