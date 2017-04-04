<?php
	session_start();
	unset($_SESSION['name']);
	echo $_SESSION['msg']="Logged Out Successfully";
	header('location:index.php');
?>