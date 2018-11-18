<?php 

function _HomeController() {
	$students = _db_get_where("students");
	die();
	$data = [
		'title'			=> _config_get("app.app_name"),
		'students'		=> _db_get_all("students")
	];

	_load_view("index", $data);
}

function _BlogController() {
	$data = [
		'title'	=> 'Blog Area'
	];
	_load_view("index", $data);
}

function _TestController() {
	$data = [
		'title'	=> 'Test Area'
	];

	_load_view("index", $data);
}

 ?>