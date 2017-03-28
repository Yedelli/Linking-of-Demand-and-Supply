<?php

	$non_skill_tables = array("employee", "employers");

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "linking";

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
	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	    	$found = FALSE;
	    	foreach ($non_skill_tables as $table_name) {
	    		if (preg_match("/\s*".trim($table_name)."\s*/i", $row["Tables_in_linking"]) == 1) {
	    			$found = TRUE;
	    			break;
	    		}
	    	}
	    	if ($found == FALSE) {
	    		array_push($skill_list, strtoupper($row["Tables_in_linking"]));
	    	}
	    }
	}
	print_r(json_encode($skill_list));
?>