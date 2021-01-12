<?php
include('connection.php');
$error='';
if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['pass1'];
		
			$query = "SELECT * FROM users";
			$run=mysqli_query($conn,$query);
			$flag=false;
			foreach ($run as $value) {
				if($value['username'] == $username OR $value['email']==$email)
				{
						$flag = true;
				}
			}
			if($flag==true){
				echo "Email Or Username Already Exists";
			}
			else{
				$sql = "INSERT INTO users(username,email,password) 
						VALUES ('$username', '$email', '$password')";		
				$sign = mysqli_query($conn,$sql);
				if(!$sign){
					$error="Error occured!";
				}
				else{
					header('location:login.php');
				}
			}
		
					
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
	
</head>
<body>
	<!-- <?php
	//if($error!=''){
	?>
	<div style="width:500px; height:50px; text-align:center; background-color: red; margin: 0 auto; color:white;">
				<p style="padding-top: 15px;"><?php// echo $error;?></p>
			</div>
		<?php
		//}?> -->
	
			<form action="" method="post">
				<h1>Sign Up</h1>
				<input type="text" name="username" placeholder="Username">	
				<input type="text" name="email" placeholder="Email">		
				<input type="password" name="pass1" placeholder="Password">
	
				<input type="submit" name="submit" value="Sign up">
			</form>
		
</body>
</html>

		