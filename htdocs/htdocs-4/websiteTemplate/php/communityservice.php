<?php
   error_reporting(E_ALL ^ E_WARNING);  
class csclass{
	
		   public function addtoDatabase(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from community_service  where events='Winter Clothing Drive' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into community_service  (events,Location,Date,Time,userid) values ('Winter Clothing Drive','Student Center','11/03/2019','6PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	
	public function addtoDatabase2(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from community_service  where events='Clean a Side Walk' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into community_service (events,Location,Date,Time,userid) values ('Clean a Side Walk','Gibbs Hall','11/03/2019','4PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	
	public function addtoDatabase3(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from community_service  where events='STEM Mentorship Program' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into community_service (events,Location,Date,Time,userid) values ('STEM Mentorship Program','McCain Hall','11/15/2019','5PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	
	public function addtoDatabase4(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from community_service  where events='Breast Cancer Walk' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into community_service (events,Location,Date,Time,userid) values ('Breast Cancer Walk','11/07/2019','7pm','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	
	public function addtoDatabase5(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from community_service  where events='Children's Book Reading' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into community_service (events,Location,Date,Time,userid) values ('Children's Book Reading','Child Development Laboratory','11/08/2019','3PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	
	public function addtoDatabase6(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from community_service  where events='Food Pantry Drive' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into community_service (events,Location,Date,Time,userid) values ('Food Pantry Drive','Williams Dining Hall','11/18/2019','2PM','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function showUsers(){
		$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql = "SELECT username from user_account left join community_service on user_account.id=community_service.userid where community_service.events='Winter Clothing Drive'" ;
		$sql2 = "SELECT username from user_account left join community_service on user_account.id=community_service.userid where community_service.events='Clean a Side Walk'" ;
		$sql3 = "SELECT username from user_account left join community_service on user_account.id=community_service.userid where community_service.events='STEM Mentorship Program'" ;
		$sql4 = "SELECT username from user_account left join community_service on user_account.id=community_service.userid where community_service.events='Breast Cancer Walk'" ;
		$sql5 = "SELECT username from user_account left join community_service on user_account.id=community_service.userid where community_service.events='Children's Book Reading'" ;
		$sql6 = "SELECT username from user_account left join community_service on user_account.id=community_service.userid where community_service.events='Food Pantry Drive'" ;
	$result = mysqli_query($conn,$sql) or die("Badd Query:$sql");
	$result2 = mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	$result3 = mysqli_query($conn,$sql3) or die("Badd Query:$sql3");
	$result4 = mysqli_query($conn,$sql4) or die("Badd Query:$sql4");
	$result5 = mysqli_query($conn,$sql4) or die("Badd Query:$sql5");
	$result6 = mysqli_query($conn,$sql6) or die("Badd Query:$sql6");
	echo "<table border ='1'>";
	echo "<tr><td>Community Service Events</td></tr>\n";
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


public function showCalendar(){
	$conn = mysqli_connect("localhost","root","","Senior Project");
	$check=mysqli_query($conn, "SELECT events From community_service where community_service.userid='{$_SESSION['userid']}'");
	echo "<table border ='1'>";
	echo "<tr><td>Here Are The Community Service Events You're Attending</td></tr>\n";
	echo "<table border ='1'>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	while($row=mysqli_fetch_assoc($check))
	{
		echo"<tr><td> {$row['events']}</td></tr>\n";
	}
	echo "</table>";
	
	}


}
?>
