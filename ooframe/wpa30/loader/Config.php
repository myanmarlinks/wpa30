<?php 

class Config {
	public static function get($value) {
		$e_value = explode(".", $value);
	$file = DD . '/config/' . $e_value[0] . ".php";
	if(file_exists($file)) {
		$data = require $file;
		array_shift($e_value);
		return $data[$e_value[0]];

	} else {
		trigger_error(_c("app.config_file_not_found"), E_USER_ERROR);
	}
	}
}

 ?>