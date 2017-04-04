<?php include('db.php'); ?>
<?php include('header.php'); ?>
<?php include('modal_add.php'); ?>
<?php include('hs.php'); ?>
<html lang="en">
<body>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">                                             		
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
											<th>Wallet_id</th>
											<th>Name</th>
											<th>Email</th>
											<th>Branch</th>
											<th>Division</th>
											<th>Phn_no</th>        
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											
											$result= mysql_query("SELECT * FROM `student`" ) or die (mysql_error());
											while ($row= mysql_fetch_array ($result) ){
											$id=$row['wallet_id'];		
											
										?>
										<tr>
											<td><?php echo $row ['wallet_id']; ?></td>
											<td><?php echo $row ['name']; ?></td>
											<td><?php echo $row ['email']; ?></td>
											<td><?php echo $row ['branch']; ?></td>
											<td><?php echo $row ['division']; ?></td>
											<td><?php echo $row ['number']; ?></td>        
											<td><?php echo $row ['amount']; ?></td>
											<td><a href="form_edit.php<?php echo '?wallet_id='.$id; ?>" data-toggle="modal" class="btn btn-info">Edit</a>
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
															<a href="delete.php<?php echo '?wallet_id='.$id; ?>" class="btn btn-danger">Yes</a>
														</div>				
													</div>
												</div>
											</div>											
									</tbody>																										
										<?php  } ?>
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
