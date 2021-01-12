<?php
session_start();
if (isset($_SESSION['user_name'])) {
	header('location:admin_dashboard.php');
}
else{
		include('dbconn.php');

			if (isset($_POST['submit'])) {
				
					$u_name = $_POST['user_name'];
					$pass_w = $_POST['password'];
					$sql = "SELECT * FROM users WHERE username = '$u_name' AND password = '$pass_w'";
					$result = mysqli_query($conn,$sql);	

					if(mysqli_num_rows($result) == 1){

						$_SESSION['user_name'] =$u_name;

						header('location:admin_dashboard.php');					
					}
					else{
						echo "Incorrect Id and password";  
					}
			}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LogInForUser</title>
	
</head>
<body>
	<form  action="" method="post">
		<h1 align="center">Login</h1>
		<table align="center">
			<tr><td><input type="text" name="user_name" placeholder="Username"></td></tr>
			<tr><td><input type="password" name="password" placeholder="Password"></td></tr>
			<tr><td><input type="submit" name="submit" value="Login"></td></tr>
		</table>
	</form>
</body>
</html>

