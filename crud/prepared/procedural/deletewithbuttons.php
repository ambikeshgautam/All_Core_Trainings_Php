<?php

include('connection.php');
//this is for delete the record form the database

// check if delete is clicked
if(isset($_POST['delete'])){

//then make a query for delete the row

  //- DLETE COMMAND FOR DELETE THE VALUE FORM THE DATABASE
	$sql = "DELETE FROM student WHERE  id = ?";
   //prepare_statement
	$result = mysqli_prepare($conn, $sql);
		if ($result) {		
		
				   // bidn resutl
					mysqli_stmt_bind_param($result,'i',$id);
				   // Variables and values
					$id = $_REQUEST['id'];
					// Execute statement
					mysqli_stmt_execute($result);

					echo mysqli_stmt_affected_rows($result)."Row is deleted <br>";
		}
		mysqli_stmt_close($result);

}

if(isset($_POST['submit']))
{
	if (($_POST['name']== "") ||($_POST['last_name']== "") ||($_POST['rollno']== "") ||($_POST['email']== "") ||($_POST['f_name']== "")) {
		
		echo "All fields are require !";
	}else{
		
				// INSERT query into the database 
				 $sql = "INSERT INTO `student`(`s_name`, `st_last_name`, `Rollno`, `email`, `fathername`) VALUES (?,?,?,?,?)";

				// Prepared Statement 
				 $result = mysqli_prepare($conn,$sql);

				if($result){
					// Bind Vriable to Prepare Statement as Paramters

				  mysqli_stmt_bind_param($result,'ssiss',$name, $last_name ,$rollno ,$email,$fathername);

				  // Variable and values
				    $name = $_POST['name'];
					$last_name = $_POST['last_name'];
					$rollno = $_POST['rollno'];
					$email = $_POST['email'];
					$fathername = $_POST['f_name'];

				// Execute Prepared Statement 
			     mysqli_stmt_execute($result);

				 echo mysqli_stmt_affected_rows($result)."Row Inserted <br> ";
				}else{
						echo "result is eroor";
				}
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>insertdata</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="row">
			<div class="col-md-4">
				 <form action="" method="POST">
					  <div class="form-group">
						    <label >Name</label>
						    <input type="text" class="form-control" name="name" placeholder="Enter Name....">						    
					   </div>
					    <div class="form-group">
						   <label >Lastmame</label>
						    <input type="text" class="form-control"  name = "last_name"placeholder="Enter Last_Name....">
						    
					   </div>
					    <div class="form-group">
						   <label >RollNO</label>
						    <input type="text" class="form-control" name="rollno"  placeholder="RollNO....">
						    
					   </div>
					   <div class="form-group">
						   <label >Emial</label>
						    <input type="text" class="form-control" name="email" placeholder="Email....">
					  </div>
					   <div class="form-group">
						    <label >Father_Name</label>
						    <input type="text" class="form-control" name="f_name" placeholder="Father_Name....">
					  </div>
					  
					    <input type="submit" name="submit" value="submit">
				</form>
			</div>
			<div class="col-md-8">
				<table class="table table-hover">
				    <thead>
					      <tr>
					      	<th>Id's</th>
					        <th>Firstname</th>
					        <th>Lastname</th>
					        <th>RollNO</th>
					        <th>Email</th>
					        <th>Father_name</th>
					        <th>Action</th>
					      </tr>
				    </thead>
				    <tbody>
				    	<?php
				    			$sql = "SELECT * FROM student";
				    			//Prepare 
				    			$result = mysqli_prepare($conn,$sql);
				    			// Bind result
				    			mysqli_stmt_bind_result($result,$id,$s_name,$st_last_name,$rollno,$email,$fathername);
				    			//Execute
				    			mysqli_stmt_execute($result);
				    			// store result in result variable
				    			mysqli_stmt_store_result($result);

				    			if (mysqli_stmt_num_rows($result)>0) {
				    				while(mysqli_stmt_fetch($result)){
				    	    ?>
				    	
					      <tr>
					      	<td><?= $id;?></td>
					        <td><?= $s_name?></td>
					        <td><?= $st_last_name?></td>
					        <td><?= $rollno?></td>
					          <td><?= $email?></td>
					        <td><?= $fathername?></td>
						     <td>
						     	<form action="" method="POST">
						     		<input type="hidden" name="id" value="<?= $id; ?>">
						        	<input type="submit" name="delete" class="btn btn-sm btn-danger" value="delete" onclick="return confirm(' are you sure do you want to delete this ')">
						        </form>
					        </td>


						      </tr>
					     <?php	}
				    			}

				    	?>
				    </tbody>
			  </table>
			</div>
     </div>
</body>
</html>

<?php

///Close Prepared Statement
mysqli_stmt_close($result);
//close connection
mysqli_close($conn);

?>