<?php
session_start();
$conn = mysqli_connect("localhost","root","","Senior Project");
if(isset($_POST["Interest"])){
			   
	mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Sports','{$_SESSION['userid']}')");
        }
if(isset($_POST["Interest2"])){
			   
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Exercise','{$_SESSION['userid']}')");
        }
if(isset($_POST["Interest3"])){
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Dance','{$_SESSION['userid']}')");
        }
if(isset($_POST["Interest4"])){
			 
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Traveling','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest5"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Video Games','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest6"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Volunteering','{$_SESSION['userid']}')");
       }
if(isset($_POST["Interest7"])){
			 
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Painting','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest8"])){
			 
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Photography','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest9"])){
			 
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Cooking','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest10"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Reading','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest11"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Creative Writing','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest12"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Science and Technology','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest13"])){
			   
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Agriculture','{$_SESSION['userid']}')");
       

		   }
		   
		echo "<meta http-equiv=\"refresh\" content=\"2;url=../WebsiteTemplate/index.php\"/>";
		   
		   


	   
?>