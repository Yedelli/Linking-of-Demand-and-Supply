<?php
	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "linking";

	// Create connection
	$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$skill = strtolower($_GET['skill']);
	$sql = "SELECT name, city, experience, gender, rating FROM employee JOIN skill ON employee.userid=skill.uid WHERE skill.skill = '$skill'";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	$employee = array();
	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	    	array_push($employee, $row);
	    }
	}
	print_r(json_encode($employee));
?>