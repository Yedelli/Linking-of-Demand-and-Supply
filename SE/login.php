<?php
	include('connect.php');
	session_start();

	if(isset($_POST['SUBMIT']) && $_POST['SUBMIT']=='Log In')
	{
		$id=$_POST['email_id'];
		$Password=md5($_POST['pwd']);

		$sel="SELECT * FROM employer WHERE email='$id'";
		$res=mysqli_query($conn, $sel) or mysql_error();


		$fet=mysqli_fetch_array($res);
		$row=mysqli_num_rows($res);
	        $name = $fet['name'];
                if($row>0)
		{
			if($Password==$fet['password'] )
			{

					$_SESSION['name']=$id;
					echo "<script>alert('Welcome  $name');
                                        window.location='search.php'</script>";


			}
			else
			{

				echo "<script>alert('Password is Incorrect');

					window.location='form.php'
				</script>";
			}
		}
		else
		{
			echo "<script>alert('You are not Registered');
				window.location='form.php'
			</script>";
		}

	}
?>