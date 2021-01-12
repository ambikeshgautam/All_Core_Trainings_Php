<?php
include('connection.php');
$error='';
if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		if($pass1==$pass2){
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
				$error="Email Or Username Already Exists";
			}
			else{
				$sql = "INSERT INTO users(username,email,password) 
						VALUES ('$username', '$email', '$pass1')";		
				$sign = mysqli_query($conn,$sql);
				if(!$sign){
					$error="Error occured!";
				}
				else{
					header('location:login.php');
				}
			}
		}
		else{
			$error="Password 1 And Password 2 did not matched";
			
		}	
						
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	if($error!=''){
	?>
	<div style="width:500px; height:50px; text-align:center; background-color: red; margin: 0 auto; color:white;">
				<p style="padding-top: 15px;"><?php echo $error;?></p>
			</div>
		<?php
		}?>
	<div id="login-box">
		<div class="left-box">
			<form action="" method="post">
				<h1>Sign Up</h1>
				<input type="text" name="username" placeholder="Username">	
				<input type="text" name="email" placeholder="Email">		
				<input type="password" name="pass1" placeholder="Password">
				<input type="password" name="pass2" placeholder="Re-enter Password">

				<input type="submit" name="submit" value="Sign up">
			</form>
		</div>
		<div class="right-box">
			<span class="signinwith">Sign Up with<br>Social Network</span>
		

			<button class="social facebook">Sign Up with Facebook</button>
			<button class="social google">Sign Up with Google</button>
			<button class="social twitter">Sign Up with Twitter</button>
		</div>	
		<div class="or">OR</div>
	</div>
</body>
</html>

		