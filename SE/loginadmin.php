<?php
	include('connect.php');
	session_start();

	if(isset($_POST['SUBMIT']) && $_POST['SUBMIT']=='Log In')
	{
		$id=$_POST['email_id'];
		$Password=md5($_POST['pwd']);

		$sel="SELECT * FROM admin WHERE email='$id'";
		$res=mysql_query($sel) or mysql_error();


		$fet=mysql_fetch_array($res);
		$row=mysql_num_rows($res);
	        $name = $fet['name'];
                if($row>0)
		{
			if($Password==$fet['password'] )
			{

					$_SESSION['name']=$id;
					echo "<script>alert('Welcome  $name');
                                        window.location='seAdmin/dashboard.php'</script>";


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

	}
?>