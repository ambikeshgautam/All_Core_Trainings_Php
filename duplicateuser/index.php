    <?php

      if(isset($_POST['Register'])) {

		    //get the name and comment entered by user
		    $firstName = $_POST['firstname'];
		    $Email =$_POST['email'];
		     $password =$_POST['password'];

		    //connect to the database
		    $dbc = mysqli_connect('localhost', 'root', '', 'duplicate') or die('Error connecting to MySQL server');
		    $check=mysqli_query($dbc,"select * from users where firstname='$firstName' and email='$Email'");
		    $checkrows=mysqli_num_rows($check);

		   if($checkrows>0) {
		      echo "customer exists";
		   } else {  
		    //insert results from the form input
		      $query = "INSERT IGNORE INTO users(firstname,email) VALUES('$firstName','$Email')";

		      $result = mysqli_query($dbc, $query) or die('Error querying database.');

		      mysqli_close($dbc);
		    }
		    echo "Customer Added";
    }
    ?>

    <html>
    <body>
    <form method='post' action='#'>
      First Name: <input type='text' name='firstname'>
      Email: <input type='email' name='email'>
      Password: <input type='password' name='password'>

    <input type='submit' name='Register' value='Submit'>
    </form>
    </body>
    </html>