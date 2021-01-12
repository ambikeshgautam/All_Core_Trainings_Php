<?php
include('connection.php');
//Query for upadate the table

$sql = "UPDATE student SET 	s_name= ?, st_last_name=?, rollno=?, email=?, fathername = ? WHERE id = ?";


// Prepared statement
$result = mysqli_prepare($conn, $sql);
if ($result) {
			  //Bind result statement
			mysqli_stmt_bind_param($result,'ssissi',$s_name,$st_last_name,$rollno,$email,$fathername,$id);
			//Variable values
			
			$s_name = "AMBIKESH";
			$st_last_name = "KUMAR GAUTAM";
			$rollno = "1635810006";
			$email = "giggoo111@gmail.com";
			$fathername = "Rambhajan Prasad";
			$id = 16;
			//Execute Statement	
			mysqli_execute($result);
			 echo mysqli_stmt_affected_rows($result)."Row is Updated <br>";
}


?>