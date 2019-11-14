<?php
        
class socialclass{
	
		   public function addtoDatabase($value){
			 
				   $conn = mysqli_connect("localhost","root","","Senior Project");
				
				$check=mysqli_query($conn,"select * from social where events='$value' and userid='{$_SESSION['userid']}'");
         $count = mysqli_num_rows($check);
		 if($count == 0){
			 $result = mysqli_query($conn,"Insert into social (events,userid) values ('$value','{$_SESSION['userid']}')");
	echo "This event has been added to your schedule you may view it on your calendar";
    } 
	
		 else {
			 
       echo "You have already added this event to your schedule please select another one."; 
    } 
        
    }


}
	   
?>
