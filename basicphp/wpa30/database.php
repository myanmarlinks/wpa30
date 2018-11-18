<?php 

function _db_connect() {
	$servername = _config_get("database.servername");
	$username = _config_get("database.username");
	$password = _config_get("database.password");
	$dbname = _config_get("database.dbname");

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function _db_get_all($table_name) {
	$conn = _db_connect();

	$sql = "SELECT * FROM " . $table_name;
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


function _db_get_where($table_name, array $columns = []) {
	if(empty($columns)) {
		trigger_error("Columns must be identified", E_USER_ERROR);
	}
	$i_cols = implode(", ", $columns);
	$conn = _db_connect();	
	$sql = "SELECT " . $i_cols . "  FROM " . $table_name;
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	return mysqli_fetch_all($result, MYSQLI_ASSOC);	
}














?>