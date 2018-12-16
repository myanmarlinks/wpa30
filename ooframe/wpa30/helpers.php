<?php 

function dump($data, $die = false) {
	var_dump($data);
	if($die == true) {
		die();
	}
}

function dd($data) {
	var_dump($data);
	die();
}

 ?>