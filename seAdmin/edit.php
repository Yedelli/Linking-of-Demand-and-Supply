<?php
	include('db.php');
	
		$wallet_id= $_POST['wallet_id'];
		$name= $_POST['name'];
		$email= $_POST['email'];
		$branch= $_POST['branch'];
		$division= $_POST['division'];
		$number= $_POST['number'];								

			mysql_query("UPDATE student SET name = '$name' , email = '$email' , branch ='$branch',
						division = '$division' , number ='$number' WHERE wallet_id = '$wallet_id'")or die(mysql_error());
																	
				header('location:employee.php');								
							
?>								