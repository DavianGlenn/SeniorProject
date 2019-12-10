<?php

        
class academicsclass{

		   public function addtoDatabase(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from academic where events='Study Blitz with the Royal Court' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into academic (events,Location,Date,Time,userid) values ('Study Blitz with the Royal Court','NCAT Student Center','11/01/2019','1PM','{$_SESSION['userid']}')");

    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase2(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from academic where events='Midwest Study Sessions' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into academic (events,Location,Date,Time,userid) values ('Midwest Study Sessions','Bluford Library','11/19/2019','7PM','{$_SESSION['userid']}')");
	
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase3(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from academic where events='Supplemental Instruction' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into academic (events,Location,Date,Time,userid) values ('Supplemental Instruction','Bluford Library','11/26/2019','6PM','{$_SESSION['userid']}')");
	
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase4(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from academic where events='ACCT 221-Suppl. Instruction' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into academic (events,Location,Date,Time,userid) values ('ACCT 221-Suppl. Instruction','Craig Hall','11/12/2019','2PM','{$_SESSION['userid']}')");
	
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase5(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from academic where events='Student Athletes Study Hall' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into academic (events,Location,Date,Time,userid) values ('Student Athletes Study Hall','Academic Classroom Building','11/13/2019','6PM','{$_SESSION['userid']}')");
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function addtoDatabase6(){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from academic where events='Supplemental Instruction- Finance' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into academic (events,Location,Date,Time,userid) values ('Supplemental Instruction- Finance','Craig Hall','11/02/2019','2PM','{$_SESSION['userid']}')");
	
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }
	public function showUsers(){
		$conn = mysqli_connect("localhost","root","","Senior Project");
		$sql = "SELECT username from user_account left join academic on user_account.id=academic.userid where academic.events='Study Blitz with the Royal Court'" ;
		$sql2 = "SELECT username from user_account left join academic on user_account.id=academic.userid where academic.events='Midwest Study Sessions'" ;
		$sql3 = "SELECT username from user_account left join academic on user_account.id=academic.userid where academic.events='Supplemental Instruction'" ;
		$sql4 = "SELECT username from user_account left join academic on user_account.id=academic.userid where academic.events='ACCT 221-Suppl. Instruction'" ;
		$sql5 = "SELECT username from user_account left join academic on user_account.id=academic.userid where academic.events='Student Athletes Study Hall'" ;
		$sql6 = "SELECT username from user_account left join academic on user_account.id=academic.userid where academic.events='Student Athletes Study Hall'" ;
	$result = mysqli_query($conn,$sql) or die("Badd Query:$sql");
	$result2 = mysqli_query($conn,$sql2) or die("Badd Query:$sql2");
	$result3 = mysqli_query($conn,$sql3) or die("Badd Query:$sql3");
	$result4 = mysqli_query($conn,$sql4) or die("Badd Query:$sql4");
	$result5 = mysqli_query($conn,$sql4) or die("Badd Query:$sql5");
	$result6 = mysqli_query($conn,$sql6) or die("Badd Query:$sql6");
	echo "<table border ='1'>";
	echo "<tr><td>Social Events</td></tr>\n";
	echo "<table border ='1'>";
	echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	
	echo "<table border ='1'>";
	
echo "<tr>";	echo "<tr><td>Who is going to the Midwest Study Sessions?</td></tr>\n";
	while($row=mysqli_fetch_assoc($result2))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	
	echo "<table border ='1'>";
	echo "<tr><td>Who is going to Supplemental Instruction?</td></tr>\n";
echo "</tr>";	
	while($row=mysqli_fetch_assoc($result3))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	
	echo "<table border ='1'>";
	echo "<tr><td>Who is going to the ACCT 221-Suppl. Instruction?</td></tr>\n";
	while($row=mysqli_fetch_assoc($result4))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	
	echo "<table border ='1'>";
	echo "<tr><td>Who is going to the Student Athletes Study Hall?</td></tr>\n";
	while($row=mysqli_fetch_assoc($result5))
	{
		echo"<tr><td> {$row['username']}</td></tr>\n";
	}
	echo "</table>";
	



}


public function showCalendar(){
	$conn = mysqli_connect("localhost","root","","Senior Project");
	$check=mysqli_query($conn, "SELECT events From academic where academic.userid='{$_SESSION['userid']}'");
	echo "<table border ='1'>";
	echo "<tr><td>Here Are The Academic Events You're Attending</td></tr>\n";
	echo "<table border ='1'>";
	//echo "<tr><td>Who is going to the Study Blitz?</td></tr>\n";
	while($row=mysqli_fetch_assoc($check))
	{
		echo"<tr><td> {$row['events']}</td></tr>\n";
	}
	echo "</table>";
	
	}
}666

?>

