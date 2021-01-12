<?php
   session_start();
 if(isset($_SESSION["Uname"])){
     echo "<h1 align ='center'> you are already Login </h1>";
     exit();
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>sessionHome</title>
</head>
<body>
    <form method="post">
    <table>
    <tr> <td>Username:</td>
    <td><input type="text" name="username"></td>
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
        $_SESSION ["Uname"] = $_POST['username'];
        $_SESSION ["Pword"] = $_POST ['password'];
        header('location:welcome.php');
            }


?>