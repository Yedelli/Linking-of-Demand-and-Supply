<?php include('db.php'); ?>
<?php include('header.php'); ?>
<?php include('hs.php'); ?>
<?php
$query = mysql_query("SELECT count(*) FROM employee" ) or die (mysql_error());
$row = mysql_fetch_row($query);
$count_employee = $row[0];

$query1 = mysql_query("SELECT count(*) FROM employer" ) or die (mysql_error());
$row1 = mysql_fetch_row($query1);
$count_employer = $row1[0];
?>
<html lang="en">
<body>
		
	 <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul id="list" class="sidebar-nav">                               
                <li>
                    <a href="index.php" class="active"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a>
                </li>
                <li>
                    <a href="employee.php"><span class="glyphicon glyphicon-user"></span> EMPLOYEE</a>
                </li>
                <li>
                    <a href="employer.php"><span class="glyphicon glyphicon-user"></span> EMPLOYER</a>
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
						</div>
                    </div>
                </div>
				<hr>
				
				
				<!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$count_employee"; ?></div>
                                    <div>No. of Employees</div>
                                </div>
                            </div>
                        </div>
                        <a href="employee.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$count_employee"; ?></div>
                                    <div>No. of Employers</div>
                                </div>
                            </div>
                        </div>
                        <a href="employer.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
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
