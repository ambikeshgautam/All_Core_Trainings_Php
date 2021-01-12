<?php
		
	  	    session_start();
	        include('config.php');
	        $update = false;
	        $id = "";
	        $name ="" ;
	        

        if(isset($_POST['add'])){
            $name = $_POST['name'];
            
            $sql = "INSERT INTO `color`(`name`) VALUES ('$name')";
            $stmt =$conn->prepare($sql);
            $stmt->bind_param("s",$name);
            $stmt->execute();
            
            $_SESSION['response'] = "Successfully Inserted to the database !";
            $_SESSION['res_type'] = "Success";   
            header('location:color.php');    

        }
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];

            $query = "DELETE FROM `color` WHERE id=?";
            $stmt=$conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            header('location:color.php');
            $_SESSION['response'] = "Successfully Deleted !";
            $_SESSION['res_type'] = "error";
        }
        if(isset($_REQUEST['edit'])){
            $id = $_REQUEST['edit'];           

            $query = "SELECT * FROM `color` WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $id = $row['id'];
            $name = $row['name'];            
            $update = true;
            exit;
          
        }
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];            
             
            $query = "UPDATE `color` SET name=? WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("si",$name,$id);
            $stmt->execute();
            $_SESSION['response'] = "Upadated SuccessFully !";
            $_SESSION['res_type'] ="attention";
            header('location:color.php');
        }     
       
    

?>