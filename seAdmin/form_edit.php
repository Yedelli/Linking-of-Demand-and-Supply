<?php 
	include('header.php');
	include('db.php');
	$get_id=$_GET['wallet_id'];
	
	$result= mysql_query("SELECT * FROM `student` where wallet_id = '$get_id' " ) or die (mysql_error());
	$row= mysql_fetch_array ($result);
?>
	<html>
		<body>
			<div class="container">				
				<br>
				<br>
					<form class="form-horizontal" action="edit.php" method="post">
					<legend> Edit </legend>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Wallet Id:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="wallet_id" name="wallet_id" value="<?php echo $row ['wallet_id']; ?>" readonly>
							</div>
						</div>						
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Name:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="name" name="name" value="<?php echo $row ['name']; ?>">
							</div>
						</div>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Email:</label>
							<div class="col-sm-4">
								<input type="email" required="required" class="form-control" id="email" name="email" value="<?php echo $row ['email']; ?>">
							</div>
						</div>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Branch:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="branch" name="branch" value="<?php echo $row ['branch']; ?>">
							</div>
						</div>						
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Division:</label>
							<div class="col-sm-4">
								<input type="text" required="required" class="form-control" id="division" name="division" value="<?php echo $row ['division']; ?>" >
							</div>
						</div>
						<div class="form-group">		
							<label class="control-label col-sm-4" for="email">Contact No:</label>
							<div class="col-sm-4">
								<input type="text"  required="required" class="form-control" id="number" name="number" value="<?php echo $row ['number']; ?>">
							</div>
						</div>												
						<br>
						<legend></legend>
						<div class="form-group">        
							<div class="col-sm-offset-6 col-sm-4">
								<button type="submit" class="btn btn-primary">Update</button>
								<a href="employee.php" class="btn btn-default">Back</a>
							</div>
						</div>
						
					</form>
			</div>
		</body>
	</html>