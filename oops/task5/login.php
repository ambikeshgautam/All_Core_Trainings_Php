<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
	<form class="box" method="post">
		<h1>Login</h1>
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="pass" placeholder="Password">
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>

<?php
session_start();
if (isset($_SESSION['username'])) {
	header('location:dashboard.php');
}
?>
<?php
include('connection.php');
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
	$result = mysqli_query($conn,$sql);	
	$row = mysqli_num_rows($result);
	if($row){
		$_SESSION['username'] = $username;
		header('location:dashboard.php');
	}
	else{
		echo "wrong credentials";  //"<script> alert('Eroor occured!');</script>";
	}
}
?>