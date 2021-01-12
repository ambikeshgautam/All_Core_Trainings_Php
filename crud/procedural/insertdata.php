<?php 

	include('connection.php');

	$sql = "INSERT INTO student(s_name,st_last_name,Rollno,email,fathername) VALUES ('Rani','kumari','3223323','rani@gmail.com','rani ke papa')";
	 $result = mysqli_query($conn,$sql);
	 if($result){
	 	echo "Row is insered ";	 	
	 }else{
	 	echo "Unable to insert results";
	 }

?>