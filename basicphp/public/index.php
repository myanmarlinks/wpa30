<?php 
define("DD", "../");
require DD . "wpa30/functions.php";
require DD . "app/controllers/controllers.php";


if(isset($_GET['page'])) {
	$page = htmlspecialchars($_GET['page']);
	
	$controller  = $page . "controller";
	if(function_exists($controller)) {
		$controller();	
	} else {
		_load_view("404");
	}
 
	
} else {
	HomeController();
}
 ?>

 