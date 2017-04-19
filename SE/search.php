<?php
include_once 'all_cities.php';
	include('connect.php');
	session_start();
	if(!isset($_SESSION['name']))
	{
		header('location:form.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Search by skills</title>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Theme CSS -->
	<link href="css/header_footer.css" rel="stylesheet">

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="padding-top: 2%;">
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
						<a class="page-scroll" href="./index.php">Home</a>
					</li>
					<li>
						<a class="page-scroll" href="./logout.php">Logout</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
					<div class="input-group">
						<span class="input-group-addon">Search by skill</span>
						<input id="skillInput" list="skills" class="form-control" aria-label="Search by skill" placeholder="Eg. Cook" autocomplete autofocus>
						<datalist id="skills"></datalist>
						<span class="input-group-btn">
							<button class="btn btn-default" id="serachBtn" type="button">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>
						</span>
					</div>
				</div><!-- /.col-lg-8 -->
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
					<div class="input-group">
						<span class="input-group-addon" id="cityLabel">City</span>
						<input list="cities" class="form-control" id="cityInput" aria-describedby="Filter by city" placeholder="Eg. Mumbai">
						<datalist id="cities">
						<?php
							foreach ($all_cities as $city) {
								echo "<option value='$city'></option>";
							}
						?>
						</datalist>
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
							</button>
						</span>
					</div>
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->

			<!-- Search Results -->
			<div id="results"></div>
		</div>
	</section>

	<footer>
		<p>Linking Demand and Supply &copy; 2017</p>
	</footer>

	<div class="modal fade" tabindex="-1" role="dialog" id="errorModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Error</h4>
				</div>
				<div class="modal-body">
					<p id="errorMsg"></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<script type="text/javascript" src="search.js"></script>
</body>
</html>