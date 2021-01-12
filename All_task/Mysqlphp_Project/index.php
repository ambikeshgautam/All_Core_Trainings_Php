<?php
include('dbconn.php');

if (isset($_POST['submit'])) {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
            $query = "SELECT * FROM users";
            $run=mysqli_query($conn,$query);
            $flag=false;
            foreach ($run as $value) {//traversing all value of the database
             if($value['username'] == $username OR $value['email']==$email)//if we get that name or email address
             {
                     $flag = true;//it means right
             }
            }
            if($flag==true){
                echo "Email Or Username Already Exists";
            }
            else{
                $inset_query = "INSERT INTO users(username,email,password) 
                        VALUES ('$username', '$email', '$password')";       
                $result = mysqli_query($conn,$inset_query);
                if(!$result){
                    $error="Error occured!";
                }
                else{
                    header('location:login.php');
                }
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UserRegistration.php</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body> <div class="container">
                <h1 align="center">RegisterHere</h1>
                <form action="" method="POST">
                        <table align="center">
                                <tr><td>Name:-<input type = "text" name = "name" placeholder="Enter Name..."></td></tr>
                                <tr><td>Email:-<input type = "email" name = "email" placeholder="Enter email..."></td></tr>
                                <tr><td>Password:-<input type = "password" name = "password" placeholder="Enter Password..."></td></tr>
                                <tr><td><input type = "submit" name = "submit" value="Register"></td></tr>       
                         </table>                
                </form>

            </div>    
    </body>
</html>