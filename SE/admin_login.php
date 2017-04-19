<?php
session_start();
	include('admin_db.php');

		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		
		$sel="SELECT * FROM admin WHERE email='$email'";
		$res=mysql_query($sel) or mysql_error();
		$fet=mysql_fetch_array($res);
		$row=mysql_num_rows($res);
		$hash_pwd=md5($pwd);
		if($row == 1)
		{
			echo "<script>alert($hash_pwd)</script>";
			if($hash_pwd==$fet['password'] )
			{

					$_SESSION['name']=$email;
					//echo "<script>window.location='admin_dashboard.php'</script>";
					header('location:admin_dashboard.php');

			}
			else
			{	
				echo "<script>alert('Password is Incorrect');
					window.location='adminlogin.php'
				</script>";
			}
		}
		else
		{
			echo "<script>alert('You are not Registered');
				window.location='adminlogin.php'
			</script>";
		}
		

?>