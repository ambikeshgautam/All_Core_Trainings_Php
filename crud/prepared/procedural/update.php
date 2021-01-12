<?php 

include('connection.php');

		if(isset($_POST['edite'])){

			//SELECT with Where
			$sql = "SELECT FROM student WHERE id=?";
			//Prepare result
			$result = mysqli_prepare($conn,$sql);
			//Bind Paarameter
			mysqli_stmt_bind_param($result,'i',$id);

			$id = $_REQUEST['id'];
			//Bind Result set in variable
			mysqli_stmt_bind_result($result,$id,$s_name,$st_last_name,$rollno,$email,$fathername);
			//Execute statement
			mysqli_stmt_execute($result);
			//Fetch Single row data	
			mysqli_stmt_fetch($result);
			// Close Prepared Statement Important			
		}

		
?>

<!DOCTYPE html>
<html>
<head>
	<title>insertdata</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
			<div class="col-md-4">
				 <form action="" method="POST">
					  <div class="form-group">
						    <label >Name</label>
						    <input type="text" class="form-control" name="name" placeholder="Enter Name...." id="name" value="<?=$s_name;?>">						    
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
					  
					    <input type="submit" name="submit" value="update" class="btn btn-success">
				</form>
			</div>
			<div class="col-md-8">
				<table class="table table-hover">
				    <thead>
					      <tr>
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
					        <td><?= $s_name?></td>
					        <td><?= $st_last_name?></td>
					        <td><?= $rollno?></td>
					          <td><?= $email?></td>
					        <td><?= $fathername?></td>
					        <td>
					        	<form action="" method="POST">
					        		<input type="hidden" name="id" value="<?=$id;?>">
					        		<input type="submit" name="edite" class="btn btn-warning" value="Edite">
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