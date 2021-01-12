<?php

$nameErr = $emailErr = $passErr = "";
$name = $email = $password = "";

if (isset($_POST['submit'])) {

			if (empty($_POST["name"])) {
    		    $nameErr = "Name is required";
  			} else {
    			$firstName = $_POST["name"];
  			}
  		 	if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			 } else {
			   $Email = $_POST["email"];
			 }
			 if (empty($_POST["password"])) {
				   $passErr = "Password is required";
			 } else {
				   $password = $_POST["password"];
			 }
        
            // $query = "SELECT * FROM users";
            // $run= mysqli_query($conn,$query);
            // $flag=false;
            // foreach ($run as $value) {//traversing all value of the database
            //  if($value['username'] == $username OR $value['email']==$email)//if we get that name or email address
            //  {
            //          $flag = true;//it means right
            //  }
            // }
            // if($flag==true){
            //     $already = "Email Or Username Already Exists";
            // }
            // else{
            //     $inset_query = "INSERT INTO users(username,email,password) 
            //             VALUES ('$username', '$email', '$password')";       
            //     $result = mysqli_query($conn,$inset_query);
            //     if(!$result){
            //         $error="Error occured!";
            //     }
            //     else{
            //         header('location:login.php');
            //     }
            // }

                        //connect to the database !
            $dbc = mysqli_connect('localhost', 'root', '', 'duplicate') or die('Error connecting to MySQL server');
            $check = mysqli_query($dbc,"select * from users where firstname='$firstName' or email='$Email'");
            $checkrows=mysqli_num_rows($check);

           if($checkrows>0) {
              echo "customer exists";
           } else {  
            //insert results from the form input
              $query = "INSERT  INTO users(firstname,email) VALUES('$firstName','$Email')";

              $result = mysqli_query($dbc, $query) or die('Error querying database.');

              mysqli_close($dbc);

              echo "Customer Added";
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
                                <tr><td>Name:-<input type = "text" name = "name" placeholder="Enter Name..."><span class="error">* <?php echo $nameErr;?></span></td></tr>
                                <tr><td>Email:-<input type = "email" name = "email" placeholder="Enter email..."><span class="error">* <?php echo $emailErr;?></span></td></tr>
                                <tr><td>Password:-<input type = "password" name = "password" placeholder="Enter Password..."><span class="error">* <?php echo $passErr;?></span></td></tr>
                                <tr><td><input type = "submit" name = "submit" value="Register"></td></tr>       
                         </table>  
                         <p style='color:red;'><?php //cho //$already ?> </p>            
                </form>

            </div>    
    </body>
</html>