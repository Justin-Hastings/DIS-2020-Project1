<?php

session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'schoolsportcarnivals');

$username = "sportsCoordinator";
$password = "root";

$dbhandle = mysqli_connect(DB_HOST, $username, $password) or die("Unable to connect to MySQL");
$selected = mysql_select_db(DB_NAME, $dbhandle) or die("Could not select examples");

$query = "SELECT Marshal_EQ_ID FROM marshal";

	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result)) {
   		echo "<option>" . $row{'marshal'} . "</option>";
	}
?>
