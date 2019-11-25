<?php
        
class socialclass{
	
		   public function addtoDatabase(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from social where events='Aggies at the Apollo Auditions' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into social (events,Location,Date,Time,userid) values ('Aggies at the Apollo Auditions','Paul Roberson Theatre','11/20/2019','5PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	
	public function addtoDatabase2(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from social where events='A Night of Terror Haunted Festival' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into social (events,Location,Date,Time,userid) values ('A Night of Terror Haunted Festival',''Merrick Hall,'11/01/2019','7PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase3(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from social where events='Laugh out Loud' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into social (events,Location,Date,Time,userid) values ('Laugh out Loud','Corbett Sports Center','11/23/2019','7PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase4(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from social where events='Game Night' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into social (events,Location,Date,Time,userid) values ('Game Night','NCAT Student Center','11/30/2019','6PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase5(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from social where events='Aggie Bazaar' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into social (events,Location,Date,Time,userid) values ('Aggie Bazaar','Park and Ride Lot','11/25/2019','1PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase6(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from social where events='Aggie Pregame' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into social (events,Location,Date,Time,userid) values ('Aggie Pregame','Corbett Sports Center','11/24/2019','4PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	
	public function showUsers(){
		$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql = "SELECT username from user_account left join social on user_account.id=social.userid where social.events='Aggies at the Apollo Auditions'" ;
		$sql2 = "SELECT username from user_account left join social on user_account.id=social.userid where social.events='A Night of Terror Haunted Festival'" ;
		$sql3 = "SELECT username from user_account left join social on user_account.id=social.userid where social.events='Laugh out Loud'" ;
		$sql4 = "SELECT username from user_account left join social on user_account.id=social.userid where social.events='Game Night'" ;
		$sql5 = "SELECT username from user_account left join social on user_account.id=social.userid where social.events='Aggie Bazaar'" ;
		$sql6 = "SELECT username from user_account left join social on user_account.id=social.userid where social.events='Aggie Pregame'" ;
	$result = mysqli_query($conn,$sql) or die("Badd Query:$sql");
	$result2 = mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	$result3 = mysqli_query($conn,$sql3) or die("Badd Query:$sql3");
	$result4 = mysqli_query($conn,$sql4) or die("Badd Query:$sql4");
	$result5 = mysqli_query($conn,$sql4) or die("Badd Query:$sql5");
	$result6 = mysqli_query($conn,$sql6) or die("Badd Query:$sql6");
	echo "<table border ='1'>";
	echo "<tr><td>Social Events</td></tr>\n";
	echo "<table border ='1'>";
	echo "<tr><td>Who is going to Aggies at the Apollo Auditions?</td></tr>\n";
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	
	echo "<table border ='1'>";
	
echo "<tr>";	echo "<tr><td>Who is going to A Night of Terror Haunted Festival?</td></tr>\n";
	while($row=mysqli_fetch_assoc($result2))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	
	echo "<table border ='1'>";
	echo "<tr><td>Who is going to Laugh out Loud?</td></tr>\n";
echo "</tr>";	
	while($row=mysqli_fetch_assoc($result3))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	
	echo "<table border ='1'>";
	echo "<tr><td>Who is going to Aggie Bazaar?</td></tr>\n";
	while($row=mysqli_fetch_assoc($result4))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	
	echo "<table border ='1'>";
	echo "<tr><td>Who is going to Aggie Pregame?</td></tr>\n";
	while($row=mysqli_fetch_assoc($result5))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	



}



}



	   
?>
