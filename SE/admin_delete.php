<?php 

	include('admin_db.php');

		$get_id=$_GET['id'];
			mysql_query("delete from skill where uid = '$get_id' ")or die(mysql_error());
			mysql_query("delete from employee where userid = '$get_id' ")or die(mysql_error());
			
				header('location:admin_employee.php');
			
?>