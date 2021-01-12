<?php include('header.php'); ?>
<?php include('PageHead.php'); ?>
<?php include('add_prd_action.php'); ?>
                               <?php
                                      if(isset($_POST['submit'])){
                                        if(isset($_POST['id'])){
                                            foreach ($_POST['id'] as $id) {
                                                 // $query = "DELETE FROM `category` WHERE id ='$id'";
                                                $query = "DELETE FROM `add_products` WHERE id=?";
                                                $stmt=$conn->prepare($query);
                                                $stmt->bind_param("i",$id);
                                                $stmt->execute();                                                
                                            }
                                        }
                                      } 
                               ?>
                  <?php if(isset($_SESSION['response'])){ ?> 
                        <div class="row justify-content-center">
                            <div class="con-md-10">                       
                                    <div class="alert alert-<?= $_SESSION['res_type'];?> alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
                                        <?= $_SESSION['response'];?>
                                    </div>   
                              </div>
                        </div>
                        <?php } ?> 
 <div class="content-box">
                <!-- Start Content Box -->

                <div class="content-box-header">
                    <h3>Products</h3>
                    <ul class="content-box-tabs">
                        <li><a href="#tab1" class="default-tab">Products</a></li>
                        <!-- href must be unique and match the id of target div -->
                        <li><a href="#tab2">Add products</a></li>
                    </ul>

                    <div class="clear"></div>

                </div>
                <!-- End .content-box-header -->

                <div class="content-box-content">

                    <div class="tab-content default-tab" id="tab1">
                        <!-- This is the target div. id must match the href of this div's tab -->

                       <!--  <div class="notification attention png_bg">
                            <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                            <div>
                                This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
                            </div>
                        </div> -->
 
                        <table>
                             <!-- this query is user for the fetch data from the database -->
                        <?php
                        $query = " SELECT * FROM `add_products`"; 
                        $stmt = $conn->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();

                         ?>
                         <!-- this query is user for the fetch data from the database -->
                     <form  action="" method="post">        
                             <thead>
                                <tr>
                                    <th><input class="check-all" type="checkbox"/></th>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                             </thead>         
                          <tbody>
                                 <?php 
                                while($row = $result->fetch_assoc()){ //Fetch a result row as an associative array         
                                ?> 
                                <tr>
                                    <td><input type="checkbox" id="checkItem" name="id[]" value="<?= $row['id'];?>" /></td>            
                                    <td><?= $row['id']; ?></td>   
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['model']; ?></td>
                                    <td><?php echo "$".$row['price']; ?></td>
                                    <td><?= $row['category'];?></td>
                                    <td><img src="<?= $row['photo'];?>" alt="img" width="50"></td>
                                    <td>
                                            <!-- <a href="#?details=<?//= $row['id'] ?>" class="glyphicon glyphicon-eye-open"></a> -->
                                            <a href="add_prd_action.php?delete=<?= $row['id'] ?>" onclick ="return confirm('Do you want to delete this This product');"><img src="resources/images/icons/cross.png" alt="Delete"/></a>
                                            <a href="addproduct.php?edit=<?=$row['id'] ?>"><img src="resources/images/icons/pencil.png" alt="Edit" name="edit" /></a>
                                    </td>
                                </tr>  
                                <?php }?>
                         </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="bulk-actions align-left">
                                            <select name="dropdown">
                                                <option value="option1">Choose an action...</option>
                                                <option value="editt">Edit</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                           <!--  <a class="button"  name="save" href="#">Apply to selected</a> -->
                                           <input type="submit" name="submit" value="Delete" onclick="return confirm('Are you sure you want to delete');" class="button">
                                        </div>

                                        <div class="pagination">
                                            <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                            <a href="#" class="number" title="1">1</a>
                                            <a href="#" class="number" title="2">2</a>
                                            <a href="#" class="number current" title="3">3</a>
                                            <a href="#" class="number" title="4">4</a>
                                            <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                                        </div>
                                        <!-- End .pagination -->
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                            </tfoot>
                          </form>
                     </table>                    
                 </div>
                    <!-- End #tab1 -->

                    <div class="tab-content" id="tab2">

                       <form action="add_prd_action.php" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <input type="hidden" name="id" value="<?= $id; ?>">
                               <p>
                                    <label>Enter Name of Product</label>
                                    <input type="text" name="name" class="text-input medium-input datepicker" value = "<?= $name;?>" placeholder="Enter name" required/>
                                </p>
                                <p>
                                    <label>Enter Model of the product</label>
                                    <input type="text" name="model" class="text-input medium-input datepicker" value = "<?= $model;?>" placeholder="Enter Model" required/>
                                </p>
                                <p>
                                    <label>Enter Price of the Product</label>
                                    <input type="text" name="price" class="text-input medium-input datepicker" value = "<?= $price;?>" placeholder="Enter Price" required/>
                                </p>                

                                    <?php
                                    $query = " SELECT * FROM `category`"; 
                                        $stmt = $conn->prepare($query);
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                    ?>
                                    <p>
                                        <label>Select Category of the Product</label>
                                        <select class="text-input small-input" id="sel1" name="select_category" value="<?= $category;?>">
                                                <option name="category">Category</option>
                                                <?php 
                                                while($row = $result->fetch_assoc()){             
                                                ?>
                                                <option name="" value="<?= $row['name'];?>"><?= $row['name']; ?></option>
                                                 <?php }?>
                                        </select>   
                                    </p>
                              
                                    <p>                                        
                                        <input type="hidden" name="oldimage" value="<?= $photo; 	?>">
                                        <input type="file" name="image" class="custom-file"/>
                                        <img src="<?= $photo;?>" width="120px" class="img-thumbnail">
                                    </p>
                                    <p>      
                                          <?php if($update == true){ ?>
                                              <input type="submit" name="update" class="button" value="Update Products"/>
                                          <?php }else{ ?>              
                                            <input type="submit" name="add" class="button" value="Add Products" />
                                          <?php } ?>
                                    </p>
                            </fieldset>
                        </form>
                    </div>
                    <!-- End #tab2 -->

     </div>
    <!-- End .content-box-content -->


            </div>

            <!-- End .content-box -->

            <div class="content-box column-left">

                <div class="content-box-header">

                    <h3>Content box left</h3>

                </div>
                <!-- End .content-box-header -->

                <div class="content-box-content">

                    <div class="tab-content default-tab">

                        <h4>Maecenas dignissim</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas
                            lacinia orci at neque commodo commodo.
                        </p>

                    </div>
                    <!-- End #tab3 -->

                </div>
                <!-- End .content-box-content -->

            </div>
            <!-- End .content-box -->

            <div class="content-box column-right closed-box">

                <div class="content-box-header">
                    <!-- Add the class "closed" to the Content box header to have it closed by default -->

                    <h3>Content box right</h3>

                </div>
                <!-- End .content-box-header -->

                <div class="content-box-content">

                    <div class="tab-content default-tab">

                        <h4>This box is closed by default</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas
                            lacinia orci at neque commodo commodo.
                        </p>

                    </div>
                    <!-- End #tab3 -->

                </div>
                <!-- End .content-box-content -->

            </div>
            <!-- End .content-box -->
            <div class="clear"></div>


            <!-- Start Notifications -->

            <div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
                </div>
            </div>

            <div class="notification information png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
                </div>
            </div>

            <div class="notification success png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
                </div>
            </div>

            <div class="notification error png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
                </div>
            </div>
<?php include('footer.php');?>