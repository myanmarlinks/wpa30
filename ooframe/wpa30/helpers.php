<?php 

function dump($data, $die = false) {
	var_dump($data);
	if($die == true) {
		die();
	}

}

 ?>