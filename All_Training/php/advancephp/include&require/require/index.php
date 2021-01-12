

<!DOCTYPE html>
<html>
<body>
<!-- PHP include vs. require

The require statement is also used to include a file into the
 PHP code.

However, there is one big difference between include and require; 
when a file is included with
 the include statement and PHP cannot find it, the script will continue to execute: -->
<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>
<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>
