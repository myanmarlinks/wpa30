<?php 

function _load_view($view, $data = null) {
	$file = DD . "/app/view/" . $view . ".php";
	if(file_exists($file)) {
		ob_start();
		if($data != null) {
			extract($data);	
		}
		require $file;
		ob_end_flush();
	} else {
		trigger_error("View File ထည့္ရမယ္ဆိုတာ မသိဘူးလား ခ်ီးထုတ္", E_USER_ERROR);
	}
}

function _config_get($value) {
	$e_value = explode(".", $value);
	$file = DD . '/app/config/' . $e_value[0] . ".php";
	if(file_exists($file)) {
		$data = require $file;
		array_shift($e_value);
		return $data[$e_value[0]];

	} else {
		trigger_error("Config file not found", E_USER_ERROR);
	}

}

function _dump($value, $die = false) {
	var_dump($value);
	if($die == true) {
		die();
	}
}

function arrayResolver($request_array, $default_array) {
	$key = explode('.', $request_array[0]);
	foreach ($key as $k => $value) {
		if(array_key_exists($value, $default_array)) {
			$default_array = $default_array[$value];
		} else {
			trigger_error('Array key doesn\'s exist.', E_USER_ERROR);
		}	
	}
	return $default_array;    
}
















 ?>