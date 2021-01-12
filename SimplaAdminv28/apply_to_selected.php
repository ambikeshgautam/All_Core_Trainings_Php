<?php 
	 if(isset($_REQUEST['apply_to_select'])){

			$selected_val = $_REQUEST['dropdown'];  // Storing Selected Value In Variable
			echo $selected_val;  // Displaying Selected Value
			
			
		}else{
			echo "Apply to select is not clicked yet";
		}

		
		if(isset($_POST['submit'])){
			if(isset($_POST['id'])){
				foreach ($_POST['id'] as $id) {
					 // $query = "DELETE FROM `category` WHERE id ='$id'";
					 $query = "DELETE FROM `category` WHERE id=?";
				  $stmt=$conn->prepare($query);
				  $stmt->bind_param("i",$id);
				  $stmt->execute();						              			
				}
			}
	  } 
 	


?>