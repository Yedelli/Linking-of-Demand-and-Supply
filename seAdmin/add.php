<?php
	include('db.php');													
		$wallet_id= $_POST['wallet_id'];
		$name= $_POST['name'];
		$email= $_POST['email'];
		$branch= $_POST['branch'];
		$division= $_POST['division'];
		$number= $_POST['number'];
		$amount= $_POST['amount'];

			mysql_query("insert into student (wallet_id,name,email,branch,division,number,amount) 
			values('$wallet_id','$name','$email','$branch','$division','$number','$amount')")or die(mysql_error());
																		
				header('location:employee.php');							
							
?>								