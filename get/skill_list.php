<?php

	$non_skill_tables = array("workers", "employers");

	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "findMyWorker";

	// Create connection
	$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SHOW TABLES";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);

	$skill_list = array();
	while($row = mysqli_fetch_assoc($result)) {
		$found = FALSE;
		foreach ($non_skill_tables as $table_name) {
			if (preg_match("/\s*".trim($table_name)."\s*/i", $row["Tables_in_".$db_name]) == 1) {
				$found = TRUE;
				break;
			}
		}
		if ($found == FALSE) {
			array_push($skill_list, strtoupper($row["Tables_in_".$db_name]));
		}
	}
	print_r(json_encode($skill_list));
?>