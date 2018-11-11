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
		
		if(array_key_exists($e_value[1], $data)) {
			
			return $data[$e_value[1]];	
		} else {
			trigger_error("Config Key does not exist", E_USER_ERROR);
		}
		

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

















 ?>