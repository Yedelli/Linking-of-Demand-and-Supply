<?php 
	include('header.php');
	include('db.php');
	$get_id=$_GET['userid'];
	
	$result= mysql_query("SELECT * FROM employee where userid = '$get_id' " ) or die (mysql_error());
	$row= mysql_fetch_array ($result);
?>
	<html>
		<head>
			<meta charset="utf-8"/>
		    	<meta name="viewport" content="width=device-width, initial-scale=1">
		    	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
			<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		       	    
				
		       	    <script type="text/javascript" src="valid.js" ></script>
		</head>
		<body>
			<div class="container">				
				<br>
				<br>
					<form class="form-horizontal" action="edit.php" method="post">
					<legend> Edit </legend>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">User Id:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="userid" name="userid" value="<?php echo $row ['userid']; ?>" readonly>
							</div>
						</div>						
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Full Name:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="name" name="name" value="<?php echo $row ['name']; ?>">
							</div>
						</div>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">City:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="city" name="city" value="<?php echo $row ['city']; ?>">
							</div>
						</div>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">ContactNo:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="contactNo" name="contactNo" value="<?php echo $row ['contactNo']; ?>">
							</div>
						</div>	
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Aadhar No:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="aadharNo" name="aadharNo" value="<?php echo $row ['aadharNo']; ?>">
							</div>
						</div>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Gender:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="gender" name="gender" value="<?php echo $row ['gender']; ?>" >
							</div>
						</div>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Age:</label>
							<div class="col-sm-4">
								<input type="text"  required="required" class="form-control" id="age" name="age" value="<?php echo $row ['age']; ?>">
							</div>
						</div>	
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Languages:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="Languages" name="Languages" value="<?php echo $row ['Languages']; ?>">
							</div>
						</div>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Image:</label>
							<div class="col-sm-4">
								<input type="file" required="required" class="form-control" id="image" name="image" value="<?php echo $row ['image']; ?>">
							</div>
						</div>
						<br>
						<legend></legend>
						<div class="form-group">        
							<div class="col-sm-offset-6 col-sm-4">
								<button type="submit" name="submit" class="btn btn-primary">Update</button>
								<a href="employee.php" class="btn btn-default">Back</a>
							</div>
						</div>
						
					</form>
			</div>
		</body>
	</html>
