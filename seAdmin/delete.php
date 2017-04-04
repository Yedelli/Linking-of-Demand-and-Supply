<?php 

	include('db.php');

		$get_id=$_GET['wallet_id'];

			mysql_query("delete from student where wallet_id = '$get_id' ")or die(mysql_error());
			
				header('location:employee.php');
			
?>