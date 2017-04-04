<?php include('db.php'); ?>
<?php include('header.php'); ?>
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
							<h2>Employer Table</h2>  
							<div class="table-responsive">          
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Id</th>
											<th>Paid by</th>
											<th>Amount</th>
											<th>Time</th>
											<th>Final amount</th>        
										</tr>
									</thead>
									<tbody>
										<?php
											$result= mysql_query("SELECT * FROM `canteen_cash`" ) or die (mysql_error());
											while ($row= mysql_fetch_array ($result) ){
											$id=$row['id'];		
										?>
										<tr>
											<td><?php echo $row ['id']; ?></td>
											<td><?php echo $row ['paid_by']; ?></td>
											<td><?php echo $row ['amount']; ?></td>
											<td><?php echo $row ['time']; ?></td>
											<td><?php echo $row ['final_amount']; ?></td>     
										</tr>
										<?php } ?>  
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
    
    <!-- Menu Toggle Script -->
    <script src="js/sidebar.js"></script>

</body>

</html>
