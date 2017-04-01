<?php

	$non_skill_tables = array("workers", "employers");

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "findMyWorker";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
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
			if (preg_match("/\s*".trim($table_name)."\s*/i", $row["Tables_in_".$dbname]) == 1) {
				$found = TRUE;
				break;
			}
		}
		if ($found == FALSE) {
			array_push($skill_list, strtoupper($row["Tables_in_".$dbname]));
		}
	}
	print_r(json_encode($skill_list));
?>