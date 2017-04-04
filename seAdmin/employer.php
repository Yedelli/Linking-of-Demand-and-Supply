<?php include('db.php'); ?>
<?php include('header.php'); ?>
<?php include('hs.php'); ?>
<html lang="en">
<body>
	
	 <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul id="list" class="sidebar-nav">                               
                <li>
                    <a href="index.php"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a>
                </li>
                <li>
                    <a href="employee.php"><span class="glyphicon glyphicon-user"></span> EMPLOYEE</a>
                </li>
                <li>
                    <a href="employer.php" class="active"><span class="glyphicon glyphicon-user"></span> EMPLOYER</a>
                </li>                              
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
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
											<th>Name</th>
											<th>Email Id</th>
											<th>Contact No</th>
											<th>Aadhar Card No</th>											       
										</tr>
									</thead>
									<tbody>
										<?php
											$result= mysql_query("SELECT * FROM employer" ) or die (mysql_error());
											while ($row= mysql_fetch_array ($result) ){
													
										?>
										<tr>
											<td><?php echo $row ['name']; ?></td>
											<td><?php echo $row ['email']; ?></td>
											<td><?php echo $row ['contactNo']; ?></td>
											<td><?php echo $row ['aadharNo']; ?></td>											    
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
