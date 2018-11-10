<?php 

function _HomeController() {
	$data = [
		'title'	=> 'Myanmar Links',
		'students'	=> [
			[
				'id'	=> 1,
				'name'	=> 'Aung Aung',
				'address'	=> 'Hledan'
			],
			[
				'id'	=> 2,
				'name'	=> 'Bung Aung',
				'address'	=> 'Hledan'
			],
			[
				'id'	=> 3,
				'name'	=> 'Cung Aung',
				'address'	=> 'Hledan'
			]
		]
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