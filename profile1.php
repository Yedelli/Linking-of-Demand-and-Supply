
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Linking</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Theme CSS -->
    <link href="css1/header_footer.css" rel="stylesheet">
	
    
</head>

<body>

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="home.php">Linking Demand and Supply</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="collapse-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#">Home</a>
                    </li>					
					<li>
                        <a class="page-scroll" href="#">Logout</a>
                    </li>                    					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<?php
	$con=mysqli_connect("localhost","root","","final_db") or die("couldn't to the  server");
	$sql = "Select * from employee where userid = 31";
	$result = $con->query($sql);
	$row = $result-> fetch_assoc();
	
	
	?>
	<section>
        <div class="container">
            <div class="row">
				<div class="col-md-3">
				
				</div>
				<div class="col-md-9">
					<h3>Personal Details:-</h3>
					<p><b>Name:</b> <?php echo $row['name'];?> </p>
					<p><b>Location:</b> <?php echo $row['city'];?></p>
					<p><b>ContactNo:</b> <?php echo $row['contactNo'];?></p>
					<p><b>Gender:</b> <?php echo $row['gender'];?></p>
					<p><b>Age:</b> <?php echo $row['age'];?></p>
					<p><b>Aadhar No:</b> <?php echo $row['aadharNo'];?></p>
					<p><b>Languages:</b> <?php echo $row['Languages'];?></p>
					</div>				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Skills</th>
									<th>Experience</th>
								</tr>
							</thead>
							<tbody>
							
							<tr>								
								<td>driving</td>
								<td>20 year</td>
							</tr>
							<tr>
								<td>Cooking</td>
								<td>15 months</td>
							</tr>
							<tr>
								<td>Baby Sitting</td>
								<td>3 months</td>
							</tr>							
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="table-responsive">
					
					</div>
				</div>
			</div>
		</div>
    </section>
	
	<footer>
		<p>Linking Demand and Supply &copy; 2017</p>
	</footer>
	
	<!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="js/rohini.js"></script>
</body>
</html>