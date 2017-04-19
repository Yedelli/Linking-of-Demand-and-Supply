<?php
	include('connect.php');
	session_start();

if(isset($_POST['SUBMIT']) && $_POST['SUBMIT']=='Sign Up'){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $pwd=$_POST['pwd'];
     $pwd1=$_POST['pwd1'];
     //$aadhar=$_POST['aadhar'];
     //$number=$_POST['number'];

     $chk_email="SELECT * FROM admin WHERE Email_Id='$email'";
     $rce=mysql_query($chk_email) or mysql_error();
     $row=mysql_num_rows($rce);

		if($row==0){

                         if ( preg_match("/[0-9]*[a-z]+[0-9]*\@/",$email))
			{
                                if($pwd==$pwd1)
                                {
                                //if (preg_match('/^\d{10}$/', $number) ) {
                                $password_hash=md5($pwd);
				$ins="INSERT INTO admin(name,email,password) VALUES('$name','$email','$password_hash')";
				mysql_query($ins);
				$_SESSION['name']=$id;
				echo "<script>alert('Registration sucessful');
				      window.location='form.php'</script>";
                                   
                                   /*else {
                                   echo "<script>alert('Invalid Phone Number');
				window.location='form.php';
                               </script>";
                                   */


                                }
                                else
                                {
                               echo "<script>alert('Passwords do not match');
				window.location='form.php';
                               </script>";
			}
			}
			else
			{
                               echo "<script>alert('Invalid Email id');
				window.location='form.php';
                               </script>";
			}
		}
		else
		{
			echo "<script>alert('Already Registered.');
				window.location='index.php';
				</script>";
                }
}
?>
