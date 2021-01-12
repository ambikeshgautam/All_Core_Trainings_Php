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
            $sql = "INSERT INTO `tag`(`tag_name`, `description`) VALUES ('$name','$detail')";
            $stmt =$conn->prepare($sql);
            $stmt->bind_param("ss",$name,$detail);
            $stmt->execute();
            
            $_SESSION['response'] = "Successfully Tad is addedd  !";
            $_SESSION['res_type'] = "Success";   
            header('location:tag.php');    

        }
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];

            $query = "DELETE FROM `tag` WHERE id=?";
            $stmt=$conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();           
            $_SESSION['response'] = "Successfully Deleted !";
            $_SESSION['res_type'] = "error";
            header('location:tag.php');
        }
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];

            $query = "SELECT * FROM `tag` WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $id = $row['id'];
            $name = $row['tag_name'];
            $detail = $row['description'];
            $update = true;
          
        }
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $detail = $_POST['detail'];
             
            $query = "UPDATE `tag` SET tag_name=?,description=? WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssi",$name,$detail,$id);
            $stmt->execute();
            $_SESSION['response'] = "Upadated SuccessFully !";
            $_SESSION['res_type'] ="information";
            header('location:tag.php');
        }

  
    

?>