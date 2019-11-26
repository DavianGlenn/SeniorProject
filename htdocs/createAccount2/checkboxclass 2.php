<?php
        include"../users.php";
class checkboxclass{
		   public function addtoDatabase(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	
	$check=mysqli_query($conn,"select * from checkbox where Cvalues='Sports' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Sports','{$_SESSION['userid']}')");
       }else{
		   echo " You already chose this hobbie can you choose another! ";
	   }
		   }
	    public function addtoDatabase2(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Exercise','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase3(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Dance','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase4(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Traveling','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase5(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Video Games','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase6(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Volunteering','{$_SESSION['userid']}')");
       }
	    public function addtoDatabase7(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Painting','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase8(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Photography','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase9(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Cooking','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase10(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Reading','{$_SESSION['userid']}')");
       

		   }
		   public function addtoDatabase11(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Creative Writing','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase12(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Science and Technology','{$_SESSION['userid']}')");
       

		   }
		    public function addtoDatabase13(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	$result = mysqli_query($conn,"Insert into checkbox (Cvalues,userid) values ('Agriculture','{$_SESSION['userid']}')");
       

		   }
		   
		   
		
		   
}

	   
?>
