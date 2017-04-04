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
					<form class="form-horizontal" name="reg" action="add.php" method="post">
						<div class="form-group">
							<label class="control-label col-sm-4" for="name">Wallet Id:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="wallet_id" name="wallet_id" placeholder="Wallet Id">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="name">Full Name:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="name" name="name" placeholder="Full Name">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="email">Email Id:</label>
							<div class="col-sm-5">
							<input type="email" required="required" class="form-control" id="email" name="email" placeholder="Email Id">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-4" for="branch">Branch:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="branch" name="branch" placeholder="Branch">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="division">Division:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="division" name="division" placeholder="Division">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="number">Contact No:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="number" name="number" placeholder="Contact No">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="number">Amount:</label>
							<div class="col-sm-5">
							<input type="text" required="required" class="form-control" id="amount" name="amount" placeholder="Amount">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="number">Image:</label>
							<div class="col-sm-5">
							<input type="file" required="required" class="form-control" id="image" name="image">
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Close</button>
					<button type="submit" name="Submit" class="btn btn-primary">Add</button>
				</div>
			</div>
		</div>
					</form>  
    </div>
