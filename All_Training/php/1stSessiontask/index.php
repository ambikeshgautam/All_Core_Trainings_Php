<?php
session_start();
if(isset($_SESSION['Uname'])){//if user is already Login with same name
    echo "<h1 align ='center'> you are already Login </h1>";
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
    <tr> <td>Username:</td>
    <td id="alert"><input type="text" name="username"></td>
    </tr>
    <tr> <td>Password:</td>
    <td><input type="password" name="password"></td>
    </tr>
    <tr><td colspan="2" align="center" ><input type="submit" value="submit" name="submit"></td></tr>
    </table>

</form>
    
</body>
</html>
<?php 

if(isset($_POST['submit'])){
    if(empty($_POST['username'])){
        echo"<p style='color:red;'>***Name is require</p>";
    }else{
    $_SESSION['Uname'] = $_POST['username'];
    header('location:dashboard.php');
    }

}

?>