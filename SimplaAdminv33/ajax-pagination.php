<?php 

    include'config.php';
    //pages calculation
    $limit_per_page = 10;

    if(isset($_REQUEST['page_no'])){
        $page = $_REQUEST['page_no'];
    }else{
        $page = 1;
    }

    $offset = ($page - 1)*$limit_per_page;    


    $sql = "SELECT * FROM `add_products` LIMIT {$offset},{$limit_per_page} ";
    $result = mysqli_query($conn,$sql);
    $output = "";    
    if(mysqli_num_rows($result)>0){
        $output.=' <table>
        <form  action="" method="post">        
                <thead>
                   <tr>
                       <th><input class="check-all" type="checkbox"/></th>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Model</th>
                       <th>Price</th>
                       <th>Category</th>
                       <th>Brand</th>
                       <th>Color</th>
                       <th>Tag</th>
                       <th>Image</th>
                       <th>Action</th>
                   </tr>
                </thead>';      
        
                while($row = mysqli_fetch_assoc($result)){
                        $output.=' 
                            <tbody>
                                    <tr>
                                    <td><input type="checkbox" id="checkItem" name="id[]" value="'.$row["id"].'" /></td>            
                                    <td>'.$row["id"].'</td>   
                                    <td>'.$row["name"].'</td>
                                    <td>'.$row["model"].'</td>
                                    <td>$'.$row["price"].'</td>
                                    <td>'.$row["category"].'</td>
                                    <td>'.$row["brand"].'</td>
                                    <td>'.$row["color"].'</td>
                                    <td>'.$row["tags"].'</td>
                                    <td><img src="'.$row["photo"].'" alt="img" width="50"></td>
                                    <td>
                                            <a href="add_prd_action.php?delete='.$row["id"].'" onclick ="return confirm();"><img src="resources/images/icons/cross.png" alt="Delete"/></a>
                                            <a href="index.php?edit='.$row["id"].'"> <img src="resources/images/icons/pencil.png" alt="Edit" name="edit" /></a>
                                    </td>
                                </tr>  
                            </tbody> ';
                    }
                    $output.='<tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="bulk-actions align-left">
                                            <select name="dropdown">
                                                <option value="">Choose an action...</option>
                                                <option value="editt">Edit</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                              <a class="button"  name="save" href="apply_to_selected.php">Apply to selected</a>
                                            
                                        </div>';

                        $sql_total = "SELECT * FROM  add_products";
                        $records = mysqli_query($conn,$sql_total);
                        $total_record = mysqli_num_rows($records);
                        $total_pages = ceil($total_record/$limit_per_page);

                         $output.='<div class="pagination" id="pagination"> ';                               
                        //first page:
                        $first_p = 1;                        
                           $output.='<a href="" id ="'.$first_p.'" title="First Page">&laquo; First</a>';                        
                        // Previous
                        $pre_page = $page-1;
                        if($page>1){
                            $output.='<a href="#" id="'.$pre_page.'" title="Previous Page">&laquo; Previous</a>';       
                        }
                        //page No
                        $last = 0;
                        for($i =1 ; $i<= $total_pages; $i++){                           
                            if($i == $page){
                                $output.='<a href=""  class="number current" >'.$i.'</a>';
                            }else{
                                $output.='<a href="" id = "'.$i.'" class="number" title="'.$i.'">'.$i.'</a>';
                            }
                            $last ++;      
                        }
                        
                        //Next page
                        $next_page = $page +1;
                        
                        $check  = $offset + $limit_per_page;

                        if($total_record>$check){
                            $output.='<a href="" id = "'.$next_page.'" title="Next Page">Next &raquo;</a>'; 
                        }

                       //Last Page

                        $output.='<a href="#" id ="'.$last.'" title="Last Page">Last &raquo;</a></div>';

                             $output.='<div class="clear"></div>
                                    </td>
                                </tr>
                            </tfoot>
                            </form>
                        </table>';
                        echo $output;
                    }else{
                        echo"No record found ";
                    }


?>