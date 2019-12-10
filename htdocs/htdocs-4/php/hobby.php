<?php
session_start();
$conn = mysqli_connect("localhost","root","","Senior Project");
if(isset($_POST["Interest"])){
			   
	mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Sports','1','{$_SESSION['userid']}')");
        }
if(isset($_POST["Interest2"])){
			   
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Exercise','2','{$_SESSION['userid']}')");
        }
if(isset($_POST["Interest3"])){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Dance',''3,'{$_SESSION['userid']}')");
        }
if(isset($_POST["Interest4"])){
			 
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Traveling','4','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest5"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Video Games',''5,'{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest6"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Volunteering','6','{$_SESSION['userid']}')");
       }
if(isset($_POST["Interest7"])){
			 
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Painting','7','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest8"])){
			 
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Photography','8','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest9"])){
			 
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Cooking','9','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest10"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Reading','10','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest11"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Creative Writing','11','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest12"])){
			  
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Science and Technology','12','{$_SESSION['userid']}')");
       

		   }
if(isset($_POST["Interest13"])){
			   
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('Agriculture','13','{$_SESSION['userid']}')");
       

		   }			   
		   
		   
		   $customerVar = $_POST['First_Name'];
		  if(!empty($customerVar)){
$result = mysqli_query($conn,"Insert into checkbox (user_interest,Event_ID,userid) values ('$customerVar','14','{$_SESSION['userid']}')");
		  }
       
		   
		   
		   echo"Thanks for providing us with this information please login with your username and password!";
		echo "<meta http-equiv=\"refresh\" content=\"2;url=../WebsiteTemplate/index.php\"/>";
		   
		   


	   
?>