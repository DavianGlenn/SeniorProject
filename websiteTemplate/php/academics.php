<?php
class academicsclass{
		   public function addtoDatabase($value){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into academic (events,userid) values ('$value','{$_SESSION['userid']}')");
       

		   }
		   }
	   
?>
