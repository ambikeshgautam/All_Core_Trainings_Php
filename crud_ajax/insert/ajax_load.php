<?php

    $conn = mysqli_connect("localhost","root","","ajax");
    $sql = "SELECT * FROM practical1";
    $result = mysqli_query($conn,$sql) or die("Sql Query Failed");

    $output = "";
    if(mysqli_num_rows($result)>0){
        
        $output = '<table border = "1" width="100%" cellspacing ="0" cellpadding = "10px">
                <tr>
                        <th>id</th>
                        <th>Name</th>
                </tr>';
                while($row = mysqli_fetch_assoc($result)){
                    $output .='<tr><td>'.$row["id"].'</td><td>'.$row["name"].'</td></tr>';

                }
        $output .="</table>";
        
        mysqli_close($conn);//close connection

        echo $output;
    }else{
        echo "<h2>Data is no Avaitable</h2>";
    }

?>