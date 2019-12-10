 <?php
			  
 $conn = mysqli_connect("localhost","root","","Senior Project");
 if(isset($_POST['submit'])){
 $sql = "SELECT academic.events, academic.userid FROM academic LEFT JOIN user_account ON academic.id=user_account.id where academic.events = 'Study Blitz with the Royal Court'";
	
	$result = mysqli_query($conn,$sql) or die("Badd Query:$sql");
	echo "<table border ='1'>";
	echo "<tr><td>Event</td><td>User</td></tr>\n";
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>{$row['events']}</td><td>{$row['userid']}</td></tr>\n";
	}
	echo "</table>";
	
	
 }
	?>