<?php 

function _HomeController() {
	$data = [
		'title'	=> 'Myanmar Links'
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