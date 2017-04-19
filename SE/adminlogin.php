<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Linking</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- For Tabs -->
	<script src="ajax/jquery.min.js"></script>
	<script src="ajax/bootstrap.min.js"></script>

	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<!-- index -->
	<link href="css/index.css" rel="stylesheet">



	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>
<br>
<br>
<br>
<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="form-body">
					<ul class="nav nav-tabs final-login">
						<li class="active"><a data-toggle="tab" href="#Signup">Sign Up</a></li>
						<li><a data-toggle="tab" href="#Login">Log In</a></li>
					</ul>
				<div class="tab-content">
					<div id="Signup" class="tab-pane fade in active">
						<div class="innter-form">
							<form class="form-horizontal" name="reg" action="admin_signup.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" class="form-control" id="fullname" name="name" placeholder="Full Name" required/>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Id" required/>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required/>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Confirm Password" required/>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										
									</div>
								</div>
                                      
								<div class="form-group">
									<div class="col-md-12">
										<input type="submit" name="SUBMIT" class ="btn btn-lg btn-primary btn-block" value="Sign Up" class="button"/>
									</div>
								</div>
							</form>
						</div>
						<!-- Login -->
						<div class="clearfix"></div>
					</div>
					<div id="Login" class="tab-pane fade">
						<div class="innter-form">
							<form class="form-horizontal" method="post" action="admin_login.php">
								<div class="form-group">
									<div class="col-md-12">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Id" required/>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required/>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="submit" name="SUBMIT" class ="btn btn-lg btn-primary btn-block" value="Log In" class="button"/>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>



	</div>

</body>

</html>