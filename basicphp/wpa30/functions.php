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
		trigger_error(_c("app.view_file_not_found"), E_USER_ERROR);
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
		trigger_error(_c("app.config_file_not_found"), E_USER_ERROR);
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

function _c($lang_key) {
	$e_lang_key = explode(".", $lang_key);
	$default_lang = _config_get("app.language");
	$file = DD . "/app/lang/" . $default_lang . "/" . $e_lang_key[0] . ".php";
	if(file_exists($file)) {
		$lang = require $file;
		return $lang[$e_lang_key[1]];
	} else {
		trigger_error("Language file not found", E_USER_ERROR);
	}

}













 ?>