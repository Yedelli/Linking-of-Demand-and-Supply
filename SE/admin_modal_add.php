<?php include('header.php'); ?>
    <!-- Modal -->
    <div class="modal fade" id="myModal"  role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">          
					<h4 class="modal-title">Add</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" name="reg" enctype="multipart/form-data" action="add.php" method="post">						
						<div class="form-group">
							<label class="control-label col-sm-4" for="name">Full Name:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="name" name="name" placeholder="Full Name">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="email">City:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="city" name="city" placeholder="City">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-4" for="branch">Contact No:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="ContactNo" name="contactNo" placeholder="ContactNo">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="division">Aadhar No:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="aadharNo" name="aadharNo" placeholder="Aadhar No">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="number">Gender:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="gender" name="gender" placeholder="Gender">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="number">Age:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="age" name="age" placeholder="Age">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="name">Languages:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="Languages" name="Languages" placeholder="Languages">
							</div>
						</div>
					<!--	<div class="form-group">
							<label class="control-label col-sm-4" for="name">Skills:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="skill" name="skill" placeholder="Skills">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="name">Experience:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="experience" name="experience" placeholder="experience">
							</div>
						</div>
					-->
						<div class="form-group">
							<label class="control-label col-sm-4" for="number">Photo:</label>
							<div class="col-sm-5">
							<input type="file" required="required" class="form-control" id="image" name="image">
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Add</button>
				</div>
			</div>
		</div>
					</form>  
    </div>
