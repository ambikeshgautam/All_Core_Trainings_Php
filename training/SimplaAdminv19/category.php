
<?php include('config.php');?>
<?php include('header.php'); ?>
<?php include('PageHead.php'); ?>
<?php include('action.php'); ?> 
						       <?php
						              if(isset($_POST['submit'])){
						              	if(isset($_POST['id'])){
						              		foreach ($_POST['id'] as $id) {
						              			 // $query = "DELETE FROM `category` WHERE id ='$id'";
						              	     	$query = "DELETE FROM `category` WHERE id=?";
									            $stmt=$conn->prepare($query);
									            $stmt->bind_param("i",$id);
									            $stmt->execute();						              			
						              		}
						              	}
						            } 
						       ?>
<!-- 			<?php// if(isset($_SESSION['response'])) { ?>
			    <div class="alert alert-<?//= $_SESSION['res_type'];?> alert-dismissible text-center">
			    <button type="button" class="close" data-dismiss="alert">&times;</button>
			    <p> <?//= $_SESSION['response']; ?></p>
			    </div>
			<?php// }else{ echo "session is not set";} unset($_SESSION['response']); ?>	 -->



			<?php if(isset($_SESSION['response'])) { ?>
            <div class="notification <?php echo $_SESSION['res_type'];?> png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    <?= $_SESSION['response']; ?>
                </div>
            </div> 
            <?php } unset($_SESSION['response']); ?>           
 			
         <div class="content-box">
                <!-- Start Content Box -->
                <div class="content-box-header">
                    <h3>Categories</h3>
                    <ul class="content-box-tabs">
                        <li><a href="#tab1" class="default-tab">Categories</a></li>
                        <!-- href must be unique and match the id of target div -->
                        <li><a href="#tab2">Create Category</a></li>
                    </ul>

                    <div class="clear"></div>
                </div>
                <!-- End .content-box-header -->

          <div class="content-box-content">

	                 <div class="tab-content default-tab" id="tab1">
						  <!-- This is the target div. id must match the href of this div's tab -->
								<?php if(isset($_SESSION['response'])) { ?>
								    <div class="alert alert-<?= $_SESSION['res_type'];?> alert-dismissible text-center">
								    <button type="button" class="close" data-dismiss="alert" >&times;</button>
								   <p> <?= $_SESSION['response']; ?> </p>
								    </div>
								<?php } unset($_SESSION['response']); ?>   
							    <?php
					               $query = " SELECT * FROM `category`"; 
					                $stmt = $conn->prepare($query);
					                $stmt->execute();
					                $result = $stmt->get_result();
					       	    ?>
                 
				  <form  action="" method="post">
                        <table>
                        	 <thead>
				                    <tr>

				                    	<th><input class="check-all" type="checkbox" /></th>
				                        <th>Id</th>
				                        <th>Name</th>
				                        <th>Description</th>
				                        <th>Actions</th>
				                    </tr>
                    		</thead>             
							<tbody>
                            	  <?php 
                    				while($row = $result->fetch_assoc()){             
                    				?>
                                <tr>
                                    <td><input type="checkbox" id="checkItem" name="id[]" value="<?= $row['id'] ?>" /></td>              
                   		 			<td><?= $row['id'];?></td>   
			                        <td><?= $row['name']; ?></td>
			                        <td><?= $row['details']; ?></td>
                                    <td>
                                        <!-- Icons -->
                                        <!-- <a href="details.php?details=<?//= $row['id'] ?>" class="glyphicon glyphicon-eye-open"></a> -->
                                		<a href="action.php?delete=<?= $row['id'] ?>"  onclick ="return confirm('Do you want to delete this category');"><img src="resources/images/icons/cross.png" alt="Delete"/></a>
                                		<a href="category.php?edit=<?= $row['id'] ?>" ><img src="resources/images/icons/pencil.png" alt="Edit" name="edit" /></a>
                                        
                                    </td>
                                </tr>
                               <?php }?> 
                            </tbody>

                            <tfoot>                            	
                                <tr>
                                    <td colspan="6">
                                    	
                                        <div class="bulk-actions align-left">
                                        	<form saction="apply_to_selected.php" method="GET">
	                                            <select name="dropdown">
													<option value="option1">Choose an action...</option>
													<option value="edit" name="edit">Edit</option>
													<option value="delete" name="delete">Delete</option>
												</select>
	                                            <input  type ="submit" class="button"  name="apply_to_select" value="Apply to select"/>
                                           <!-- <input type="submit" name="submit" value="Delete" onclick="return confirm('Are you sure you want to delete');" class="button"> -->
                                            </form>
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
                        </table>
               </form>
        </div>
                    <!-- End #tab1 -->

                    <div class="tab-content" id="tab2">

	                        <form action="action.php" method="post">
	                        	<fieldset>
							      		 <input type="hidden" name="id" value="<?= $id; ?>">
							         	  <p>
							         	  	 <label>Enter Name of Category</label>
							               	 <input type="text" name="name" class="text-input small-input" value = "<?= $name; ?>" placeholder="Enter name" require/>
							          	  </p>
							          	  <p>  
							          	  		<label>Enter Description of Category</label>
							                	<input type="text" name="detail" class="text-input small-input" value = "<?= $detail;?>" placeholder="Enter Description" require/>
							          	  </p>
							           	   <p>
							              		 <?php if($update == true) { ?>
							              		  <input type="submit" name="update" class="button" value="Update Ctegory" require/>
							                	 <?php }else { ?>
							              		  <input type="submit" name="add" class="button" value="Add Ctegory" require/>
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