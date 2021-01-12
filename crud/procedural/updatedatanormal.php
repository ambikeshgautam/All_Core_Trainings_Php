<?php

		include('connection.php');
		$sql = "UPDATE `student` SET `s_name`='newupdated name',`st_last_name`='gautam',`Rollno`='112121',`email`='update@gamil.com',`fathername`='upadat' WHERE id =13";		

		if(mysqli_query($conn,$sql)){
			echo "updated";
		}else{
			echo "error";
		}



?>