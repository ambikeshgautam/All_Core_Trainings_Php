<?php 
	 if(isset($_REQUEST['apply_to_select'])){

			echo $selected_val = $_REQUEST['dropdown'];  // Storing Selected Value In Variable
			

		
		if(isset($_POST['submit'])== $selected_val){
			// if(isset($_POST['id'])){
			// 	foreach ($_POST['id'] as $id) {

			// 	 $query = "DELETE FROM `category` WHERE id=?";
			// 	  $stmt=$conn->prepare($query);
			// 	  $stmt->bind_param("i",$id);
			// 	  $stmt->execute();						              			
			// 	}
			// }
			echo "value is match";
	  } 	
	
			
			
	}else{
		echo "Apply to select is not clicked yet";
	}
 	


?>