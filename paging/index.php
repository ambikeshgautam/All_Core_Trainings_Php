<?php


        $conn = mysqli_connect("localhost","root","","pagination");
        $q1 = mysqli_query($conn, "SELECT * FROM student");
        $count = mysqli_num_rows($q1);

        $rowsperpage = 5;//total no.of rows perpage
        $page = $_REQUEST['p'];//no of page
        $page = $page-1;
        $p = $page * $rowsperpage;// 10*1 =10/10*2 = 20;        

        $query = "SELECT * FROM `student` limit ".$p.",".$rowsperpage;
        $run = mysqli_query($conn,$query);
        while($rs = mysqli_fetch_array($run)){
            echo $rs['id']."->".$rs['name']."</br>";
        }

      // back link
        if($_REQUEST['p']>1){
            $pre_page = $_REQUEST['p']-1;
            echo'<a href="index.php?p='.$pre_page.'">back</a>';

        }
        //page no 
        $limit = $count /$rowsperpage;

        $limit = ceil($limit);//for roundup the value
         for($i=1; $i<=$limit; $i++){
            if($i == $_REQUEST['p']){
                echo $i." ";
            }else{
                echo '<a href ="index.php?p='.$i.'">  '.$i.'</a>';
            }
         }
        // next link
        $check  = $p + $rowsperpage;
        
        if($count>$check){
        $next_page = $_REQUEST['p'] +1;
        echo'<a href="index.php?p='.$next_page.'">next</a>';
        }

        
        


?>