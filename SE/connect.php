<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db=mysqli_select_db($conn, "linking") or die('MYSQL DATABASE ERROR');
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
//else{
//echo "Connected successfully";}
?>