	<?php
			
		$base_url = ('http://localhost/SimpalAdmin/resource/');

		// connect to Database 
		$server_n = "localhost";
		$user_n = "root";
		$p_word = "";
		$db_name = "db_user";

		$conn = new mysqli($server_n,$user_n,$p_word,$db_name);

		if($conn->connect_error){
			die("Connection is failed Sorry !".$conn->error);
		}//else{
		// 	//echo "Successfully Connected";
		// }

		


?>