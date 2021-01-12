<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.navbar{	
			height: 18vh;
			width: 100%;
			background-color: #4e5154; 
			position: relative;
		}
		li a{
			text-decoration: none;
			color: white;
			font-size: 30px;
			position: absolute;
			left: 30px;
			bottom: 10px;
		}
		li a:hover{
			color:#25e87a;
		}
	</style>
</head>
<body>
	<div class="navbar">
		<ul>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

</body>
</html>

<?php
session_start();
if (isset($_SESSION['userame'])) {
	echo "Welcome" .($_SESSION['userame']) ;
}

?>

