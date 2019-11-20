<?php
        include"../users.php";
class checkboxclass{
		   public function addtoDatabase($value){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('$value','{$_SESSION['userid']}')");
       

		   }}
	   
?>
