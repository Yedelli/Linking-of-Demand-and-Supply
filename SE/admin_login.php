<?php
	include('admin_db.php');

		$name=$_POST['name'];
		$pwd=$_POST['pwd'];
		
		$sel="SELECT * FROM admin WHERE name='$name'";
		$res=mysql_query($sel) or mysql_error();
		$fet=mysql_fetch_array($res);
		$row=mysql_num_rows($res);
		if($row>0)
		{
			if($pwd==$fet['pwd'] )
			{

					$_SESSION['name']=$name;
					echo "<script>window.location='index.php'</script>";
					header('location:index.php');

			}
			else
			{	
				echo "<script>alert('Password is Incorrect');
					window.location='index.php'
				</script>";
			}
		}
		else
		{
			echo "<script>alert('You are not Registered');
				window.location='index.php'
			</script>";
		}
		

?>