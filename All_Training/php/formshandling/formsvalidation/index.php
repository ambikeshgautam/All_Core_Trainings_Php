<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $name = test_input($_POST["name"]);//here test_input is userdefine function t
  $email = test_input($_POST["email"]); 
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {//here is definition of the test_input function 
  $data = trim($data);//trim($data) will strip unneccessary characters (extra space,tab , newline) from the user input data with trim function 
  $data = stripslashes($data);//stripslashes($data) will remove backslaces() from the user input data(with the PHP stripslashes()functionn )
  $data = htmlspecialchars($data);//htmlspecialchars ($data)  converts special characters to HTML entities.
  return $data;
}
?>



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>

