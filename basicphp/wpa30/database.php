<?php 

function _db_get_all($table_name) {
	$servername = _config_get("database.servername");
	$username = _config_get("database.username");
	$password = _config_get("database.password");
	$dbname = _config_get("database.dbname");


	$conn = mysqli_connect($servername, $username, $password);

// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
}

?>