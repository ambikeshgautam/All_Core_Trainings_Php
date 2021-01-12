<?php 
	 if(isset($_GET['apply_to_select'])){

			$selected_val = $_POST['dropdown'];  // Storing Selected Value In Variable
			echo $selected_val;  // Displaying Selected Value
			
			
		}else{
			echo "Apply to select is not clicked yet";
		}

?>