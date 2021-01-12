<?php
session_start();
if (isset($_SESSION['user_name'])) {
	header('location:index.php');
}
else{
		include('config.php');

			if (isset($_POST['submit'])) {
				
					$u_name = $_POST['username'];
					$pass_w = $_POST['password'];
					$sql = "SELECT * FROM users WHERE username = '$u_name' AND password = '$pass_w'";
					$result = mysqli_query($conn,$sql);	

					if(mysqli_num_rows($result) == 1){

						$_SESSION['user_name'] =$u_name;

						header('location:index.php');					
					}
					else{
						echo "<div class='bs-example'> 
    								<div class='alert alert-warning alert-dismissible fade show'>
        							<strong>Warning!</strong> Please enter a valid value in all the required fields before proceeding.
        							<button type='button' class='close' data-dismiss='alert'>&times;</button>
    								</div>
							</div>";  
					}
			}
}

?> 



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simpla Admin | Sign In</title>
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form action="" method="POST">
				
					<div class="notification information png_bg">
						<div>
							Just click "Sign In". No password needed.
						</div>
					</div>
					
					<p>
						<label>Username</label>
						<input class="text-input" name ="username" type="text" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password"  name="password" />
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox"/>Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" name="submit" value="Sign In"/>
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
  </body>
</html>
