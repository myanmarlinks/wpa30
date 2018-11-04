<?php 

function HomeController() {
	$data = [
		'title'	=> 'Myanmar Links'
	];
	_load_view("index", $data);
}

function BlogController() {
	$data = [
		'title'	=> 'Blog Area'
	];
	_load_view("index", $data);
}

function TestController() {
	$data = [
		'title'	=> 'Test Area'
	];

	_load_view("index", $data);
}

 ?>