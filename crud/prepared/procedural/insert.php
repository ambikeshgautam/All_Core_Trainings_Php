<?php

include('connection.php');

// INSERT query into the database 
 $sql = "INSERT INTO `student`(`s_name`, `st_last_name`, `Rollno`, `email`, `fathername`) VALUES (?,?,?,?,?)";

// Prepared Statement 
 $result = mysqli_prepare($conn,$sql);

if($result){
	// Bind Vriable to Prepare Statement as Paramters

   mysqli_stmt_bind_param($result,'ssiss',$s_name, $st_last_name ,$Rollno ,$email,$fathername);

		//variables values
		 $s_name ="sukriti";  
		 $st_last_name = "gpt";
		 $Rollno = "1635810032";
		 $email = "ambikeah@gamil.com";
		 $fathername = "papa ji";

		// Execute Prepared Statement 
		 mysqli_stmt_execute($result);

		 echo mysqli_stmt_affected_rows($result)."Row Inserted <br> ";
}else{
		echo "result is eroor";
}



// close prepared statement 

?>