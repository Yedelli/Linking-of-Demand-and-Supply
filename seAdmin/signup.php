<?php
include('db.php');

     $name=$_POST['name'];
     $email=$_POST['email'];
     $pwd=$_POST['pwd'];     
     $number=$_POST['number'];

     $chk_email="SELECT * FROM admin WHERE email='$email'";
     $rce=mysql_query($chk_email) or mysql_error();
     $row=mysql_num_rows($rce);
		if($row==0){
                           
			
				$ins="INSERT INTO admin(name,email,pwd,number) VALUES('$name','$email','$pwd','$number')";
				mysql_query($ins);
				$_SESSION['name']=$name;
				header('location:index.php');
			
			
		}
		else
		{
			echo "<script>alert('Some error Occured While Registration...');
				window.location='index.php';
				</script>";
                }

?>