        <?php

            $conn = mysqli_connect("localhost","root","","uploadfile");
           
            error_reporting(0);
            

            if(isset($_POST['submit'])){
            //1 take filename which is going to be upload
            $filename = $_FILES['image']['name'];
            //2 take templaray name of the file which is going to be upload
            $tempname = $_FILES['image']['tmp_name'];
            //3 folderloaction where this is going to be upload
            $folder = "uploads/".$filename;
            // echo $folder;
            //move to the folderlocation where you want to insert your image 

            move_uploaded_file($tempname,$folder);//This is take two parameter one is temprary name and second one is folderlocation
            $sql = "INSERT INTO `student`(`image`) VALUES ('$folder')"; 
            $data = mysqli_query($conn,$sql);
            if($data){
                echo"data is upload successfully";

            }else{
                echo "not uploaded";
            }

            while($result = mysqli_fetch_assoc($data)){
                echo $result['image'];
            }

        } 
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>upload image</title>
        </head>
        <body>
            <form action="" method="post" enctype="multipart/form-data">  
                    Select File:  
                        <input type="file" name="image"/>  
                        <input type="submit" value="Upload Image" name="submit"/>  
            </form>  
        </body>
        </html>