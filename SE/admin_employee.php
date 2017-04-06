<?php include('admin_db.php'); ?>
<?php include('admin_header.php'); ?>
<?php include('admin_modal_add.php'); ?>
<?php include('admin_hs.php'); ?>
<html lang="en">
<body>
	
	 <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul id="list" class="sidebar-nav">                               
                <li>
                    <a href="admin_dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a>
                </li>
                <li>
                    <a href="admin_employee.php" class="active"><span class="glyphicon glyphicon-user"></span> EMPLOYEE</a>
                </li>
                <li>
                    <a href="admin_employer.php"><span class="glyphicon glyphicon-user"></span> EMPLOYER</a>
                </li>                              
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="row">                                             		
						<div id="main">  
							<h2><a href="#menu-toggle" style="cursor:pointer" id="menu-toggle">&#9776; Dashboard</a></h2>
							
							<h2>Employee Table</h2>
							<a href="#myModal"  data-toggle="modal"  class="btn btn-primary" >Add</a>			
							<br>
							<br>								
							<div class="table-responsive">          
								<table class="table table-bordered">
									<thead>
										<tr>											
											<th>Image</th>
											<th>Name</th>
											<th>City</th>
											<th>Contact No</th>
											<th>Aadhar Card No</th>
											<th>Gender</th>
											<th>Age</th>        
											<th>Languages</th>
											<th>Skills</th>
											<th>Experience</th>
											<th>Rating</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											
											$result= mysql_query("SELECT * FROM employee" ) or die (mysql_error());
											while ($row= mysql_fetch_array ($result) ){
											$id=$row['userid'];		
											
										?>
										<tr>
											<td><a href="#<?php  echo $id;?>" data-toggle="modal">
													<?php if($row['image'] != ""): ?>
														<img src="upload/<?php echo $row['image']; ?>" width="80px" height="80px" style="border:1px solid #333333;">
													<?php else: ?>
														<img src="upload/default.png" width="80px" height="80px" style="border:1px solid #333333;">
													<?php endif; ?>
											</a></td>
											<td><?php echo $row ['name']; ?></td>
											<td><?php echo $row ['city']; ?></td>
											<td><?php echo $row ['contactNo']; ?></td>
											<td><?php echo $row ['aadharNo']; ?></td>
											<td><?php echo $row ['gender']; ?></td>
											<td><?php echo $row ['age']; ?></td>        
											<td><?php echo $row ['Languages']; ?></td>
											<?php
											
												$query= mysql_query("SELECT uid,GROUP_CONCAT(skill) as skill, GROUP_CONCAT(experience) as experience, GROUP_CONCAT(rating) as rating FROM skill WHERE uid= '$id' GROUP BY uid" ) or die (mysql_error());
												while ($row1= mysql_fetch_array ($query) ){
													$id1=$row1['uid'];		
											
											?>
											<td><?php echo $row1 ['skill']; ?></td>
											<td><?php echo $row1 ['experience']; ?></td>
											<td><?php echo $row1 ['rating']; ?></td>
												<?php } ;?>
											
											<td><a href="admin_form_edit.php<?php echo '?userid='.$id; ?>" data-toggle="modal" class="btn btn-info">Edit</a>
												<a href="#delete<?php echo $id;?>" data-toggle="modal"  class="btn btn-danger" >Delete </a>			
											</td>																					
										</tr>
											<!--Modal_delete-->
											<div class="modal fade" id="delete<?php echo $id;?>" role="dialog">
												<div class="modal-dialog">
    
													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">          
															<h4 class="modal-title">Delete</h4>
														</div>
														<div class="modal-body">
															<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
																</div>
														</div>
														<div class="modal-footer">
															<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
															<a href="delete.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Yes</a>
														</div>				
													</div>
												</div>
											</div>	

											<!-- Modal Bigger Image -->
											<div id="<?php  echo $id;?>" class="modal fade" role="dialog" >
												<div class="modal-header">	
													<h3 id="myModalLabel"><b><?php echo $row['name']; ?></b></h3>
												</div>
												<div class="modal-body">
													<?php if($row['image'] != ""): ?>
														<img src="upload/<?php echo $row['image']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 33.33%; height:387px;">
													<?php else: ?>
														<img src="upload/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left:  33.33%; height:387px;">
													<?php endif; ?>
												</div>
												<div class="modal-footer">
													<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
												</div>
											</div>
											
										<?php  } ?>
									</tbody>
								</table>		
							</div>							
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
	
	
	
	   <!-- Menu Toggle Script  rewrite in all pages-->
    <script src="js/sidebar.js"></script>
</body>

</html>
