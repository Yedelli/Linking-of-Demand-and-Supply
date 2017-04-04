<?php include('header.php') ; ?>
<html>
<body>

<!-- Header -->
	<div id="wrapper">
		<div class="header">	
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="index.php">Linking Demand and Supply of Skilled/Semi-Skilled Labours</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">            
						<ul class="nav navbar-nav navbar-right">
							
							<li><a href="#login" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
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
		
		
		
	<!-- Menu Toggle Script -->
    <script src="js/sidebar.js"></script>

		
</body>

</html>