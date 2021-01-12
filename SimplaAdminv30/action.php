<?php
		
	  		 session_start();
	        include('config.php');
	        $update = false;
	        $id = "";
	        $name ="" ;
	        $detail ="" ;

        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $detail= $_POST['detail'];
            $sql = "INSERT INTO `category`(`name`, `details`) VALUES ('$name','$detail')";
            $stmt =$conn->prepare($sql);
            $stmt->bind_param("ss",$name,$detail);
            $stmt->execute();
            
            $_SESSION['response'] = "Successfully Inserted to the database !";
            $_SESSION['res_type'] = "Success";   
            header('location:category.php');    

        }
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];

            $query = "DELETE FROM `category` WHERE id=?";
            $stmt=$conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            header('location:category.php');
            $_SESSION['response'] = "Successfully Deleted !";
            $_SESSION['res_type'] = "danger";
        }
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];

            $query = "SELECT * FROM `category` WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $id = $row['id'];
            $name = $row['name'];
            $detail = $row['details'];
            $update = true;
          
        }
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $detail = $_POST['detail'];
             
            $query = "UPDATE `category` SET name=?,details=? WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssi",$name,$detail,$id);
            $stmt->execute();
            $_SESSION['response'] = "Upadated SuccessFully !";
            $_SESSION['res_type'] ="primary";
            header('location:category.php');
        }

?>