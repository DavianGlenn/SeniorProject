<?php
     
class checkboxclass{
		   public function addtoDatabase(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
	
	$check=mysqli_query($conn,"select * from checkbox where user_interest='Sports' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
			 $result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Sports','1','{$_SESSION['userid']}')");
       }else{
		   echo " You already chose this hobbie can you choose another! ";
	   }
		   }
	    public function addtoDatabase2(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Exercise' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Exercise','2','{$_SESSION['userid']}')");
       

		   }
		}
		    public function addtoDatabase3(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Dance' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Dance','3','{$_SESSION['userid']}')");
       

		   }
			}
		    public function addtoDatabase4(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Traveling' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Traveling','4','{$_SESSION['userid']}')");
       

		   }
			}
		    public function addtoDatabase5(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Video Games' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Video Games','5','{$_SESSION['userid']}')");
       

		   }
			}
		    public function addtoDatabase6(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Volunteering' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Volunteering','6','{$_SESSION['userid']}')");
       }
			}
	    public function addtoDatabase7(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Painting' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Painting','7','{$_SESSION['userid']}')");
       

		   }
		}
		    public function addtoDatabase8(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Photography' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Photography','8','{$_SESSION['userid']}')");
       

		   }
			}
		    public function addtoDatabase9(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Cooking' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Cooking','9','{$_SESSION['userid']}')");
       

		   }
			}
		    public function addtoDatabase10(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Reading' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Reading','10','{$_SESSION['userid']}')");
       

		   }
			}
		   public function addtoDatabase11(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Creative Writing' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Creative Writing','11','{$_SESSION['userid']}')");
       

		   }
		   }
		    public function addtoDatabase12(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Science and Technology' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_ID,userid) values ('Science and Technology','12','{$_SESSION['userid']}')");
       

		   }
			}
		    public function addtoDatabase13(){
			   $conn = mysqli_connect("localhost","root","","Senior Project");
			   $check=mysqli_query($conn,"select * from checkbox where user_interest='Agriculture' and userid='{$_SESSION['userid']}'");
	$count = mysqli_num_rows($check);
		 if(!$count){
	$result = mysqli_query($conn,"Insert into checkbox (user_interest,event_id,userid) values ('Agriculture','13','{$_SESSION['userid']}')");
       

		   }
			}
			public function showInterests(){
		$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql = "SELECT user_interest from checkbox where userid = '{$_SESSION['userid']}'" ;
		
	$result= mysqli_query($conn,$sql) or die("Badd Query:$sql");
	echo "<table border ='1'>";
	echo "<tr><td>Here's Your Hobbies</td></tr>\n";
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['user_interest']}</td></tr>\n";
	}
	echo "</table>";
	
	}
		   
		   
		
		   
}

	   
?>
