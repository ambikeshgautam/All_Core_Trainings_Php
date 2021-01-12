
<?php

	include('connection.php');

	if (isset($_POST['submit'])) {

			//checking for emplty field
		if(($_REQUEST['name']=="")||($_REQUEST['last_name']=="")||($_REQUEST['roll']=="")||($_REQUEST['email']=="")||($_REQUEST['f_name']=="")){
			echo "All field are Required";
		}else{

			//recieve all data which is comming from the input field
			$name = $_REQUEST['name'];
			$last_name = $_REQUEST['last_name'];
			$rollno = $_REQUEST['roll'];
			$email = $_REQUEST['email'];
			$fathername = $_REQUEST['f_name'];

			$sql = " INSERT INTO student(s_name,st_last_name,Rollno,email,fathername) VALUES('$name','$last_name','$rollno','$email','$fathername')";

			$result = mysqli_query($conn,$sql);
			if($result){
				echo "Data is inserted !";
			}else{
				echo "There is some error";
			}



		}
		


	}else{
		echo "not clicked Yet";
	}




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  	<div class="row">
  		<div class="col-sm-4">
  			<form action="" method="POST">
  				<div class="form-group">
  					<label for="name"> Enter Name:-</label>
  					<input type="text" name="name" class="form-control">  					
  				</div>

  				<div class="form-group">
  					<label for="name"> Last Name:-</label>
  					<input type="text" name="last_name" class="form-control">  					
  				</div>

  				<div class="form-group">
  					<label for="name"> Enter Roll:-</label>
  					<input type="text" name="roll" class="form-control">  					
  				</div>

  				<div class="form-group">
  					<label for="name"> Enter email:-</label>
  					<input type="email" name="email" class="form-control">  					
  				</div>

  				<div class="form-group">
  					<label for="name"> Enter Fathername:-</label>
  					<input type="text" name="f_name" class="form-control">  					
  				</div>
  				<button type="submit" class="btn btn-primary" name="submit">Submit</button>

  				
  			</form>

  			
  		</div>
  		<div class="col-sm-8">
  			
  		</div>
  		
  	</div>
  	
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

