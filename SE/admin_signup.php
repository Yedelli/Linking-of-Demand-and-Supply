<?php
session_start();
include('admin_db.php');

     $name=$_POST['name'];
     $email=$_POST['email'];
     $pwd=$_POST['pwd'];     
     

     $chk_email="SELECT * FROM admin WHERE email='$email'";
     $rce=mysql_query($chk_email) or mysql_error();
     $row=mysql_num_rows($rce);
		if($row==0){
                           
				$hash_pwd=md5($pwd);
				$ins="INSERT INTO admin(name,email,password) VALUES('$name','$email','$hash_pwd');";
				mysql_query($ins);
				$_SESSION['name']=$email;
				//header('location:admin_dashboard.php');
				echo "<script>alert('Registration successful');
				window.location='admin_dashboard.php';
				</script>";
			
		}
		else
		{
			echo "<script>alert('Some error Occured While Registration...');
				window.location='adminlogin.php';
				</script>";
                }

?>