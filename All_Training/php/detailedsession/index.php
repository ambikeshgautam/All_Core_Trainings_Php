<?php
session_start();
if(isset($_SESSION['uemail'])){
    echo"<h2 align='center'>You are already Login</h2>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
    <form method="post">
    <table>
    
    <tr><td>Name:-</td><td> <input type="text" name ="name" placeholder="Enter Your Name ......"></td></tr>
    <tr><td>FatherName:- </td><td><input type="text" name="fname" placeholder="Enter papa name....."></td></tr>
    <tr><td>Address:-</td><td> <input type="text" name="address" placeholder="Enter Address...."></td></tr>
    <tr><td>EmailId :-</td><td> <input type="email" name="email" placeholder="Enter Email Address..."></td></td>
    <tr><td><input type="submit" name="submit" value="submit"></td></tr>
    
    </table>
    </form>
</body>
</html>
<?php

  if(isset($_POST['submit'])){
    $_SESSION['uname'] = $_POST["name"];
    $_SESSION['ufname'] = $_POST["fname"];
    $_SESSION['uaddress'] = $_POST["address"];
    $_SESSION['uemail'] = $_POST["email"];
    header('location:welcome.php');
}
    

?>