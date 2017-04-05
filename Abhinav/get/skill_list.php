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

	$sql = "SELECT DISTINCT skill from skill";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);

	$skill_list = array();
	while($row = mysqli_fetch_assoc($result)) {
		array_push($skill_list, strtoupper($row["skill"]));
	}
	print_r(json_encode($skill_list));
?>