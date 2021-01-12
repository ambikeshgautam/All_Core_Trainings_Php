<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<div>
		<ul>
			<h3><li style="list-style: none; color:blue;"><a href="logout.php">Logout</a></li></h3>
		</ul>
	</div>

</body>
</html>

<?php
	session_start();
	if (isset($_SESSION['user_name'])) {
?>
	<h2><?php echo "Your Welcome \t" .$_SESSION['user_name']; ?></h2>
	
<?php	
	}

?>

