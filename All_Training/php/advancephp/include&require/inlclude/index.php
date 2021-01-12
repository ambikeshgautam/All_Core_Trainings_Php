<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include.php</title>
</head>
<body><div class="menu">
<?php include 'menu.php';?>
</div>
<h1>WELCOME ON HOME PAGE</h1>
<p>This is paragraph One some text here</p>
<p> There is some text </p>
<?php include 'vars.php';
  echo "I have a $color $car.";
?>
<?php  include'footer.php'?>
    
</body>
</html>