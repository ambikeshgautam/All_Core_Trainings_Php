<?php
include('dbconn.php');
$nameErr = $emailErr = $passErr = "";
$name = $email = $password = "";

if (isset($_POST['submit'])) {

			if (empty($_POST["name"])) {
    		$nameErr = "Name is required";
  			} else {
    			$Name = $_POST["name"];
  			}
  		 	if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			 } else {
			   $Email = $_POST["email"];
			 }
			 if (empty($_POST["password"])) {
				   $passErr = "Password is required";
			 } else {
				   $Password = $_POST["password"];
			 }


            $check = mysqli_query($conn,"select * from users where username='$Name' or email='$Email'");
            $checkrows=mysqli_num_rows($check);

           if($checkrows>0) {

              echo " <h3><p style='color:red; text-align: center;'>User already Exists</p></h3>" ;
           } else {  
            //insert results from the form input
              $query = "INSERT  INTO users(username,email,password) VALUES('$Name','$Email','$Password')";

              $result = mysqli_query($conn, $query) or die('Error querying database.');

              mysqli_close($conn);

              echo "Customer Added";

                header('location:login.php');
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
        <style>
			.error {color: #FF0000;}
		</style>
    </head>
    <body> <div class="container">
                <h1 align="center">RegisterHere</h1>
                <form action="" method="POST">
                        <table align="center">
                                <tr><td>Name:-<input type = "text" name = "name" placeholder="Enter Name...">
                                    <span class="error">* <?php echo $nameErr;?></span></td></tr>
                                <tr><td>Email:-<input type = "email" name = "email" placeholder="Enter email...">
                                    <span class="error">* <?php echo $emailErr;?></span></td></tr>
                                <tr><td>Password:-<input type = "password" name = "password" placeholder="Enter Password...">
                                    <span class="error">* <?php echo $passErr;?></span></td></tr>
                                <tr>
                                	<td>
                                		<input type = "submit" name = "submit" value="Register">
                                		
                                	</td>
                                </tr>       
                         </table>  
                       
                </form>

            </div>    
    </body>
</html>