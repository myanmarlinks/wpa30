<?php 
define("DD", realpath("../"));

/*
Useful Links 
PSR-4 Autoload - https://youtu.be/VGSerlMoIrY 
*/

require DD . "/vendor/autoload.php";

$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$script_name = explode("/", $_SERVER['SCRIPT_NAME']);
$uri = array_values(array_diff($request_uri, $script_name));

if(empty($uri)) {
	$page = "home";
} else {
	$page = $uri[0];
}

$routes = include DD . "/app/routes.php";

if(array_key_exists($page, $routes)) {
	$route = $routes[$page];
	$e_route = explode("@", $route);
	call_user_func_array([new $e_route[0], $e_route[1]],[]);
} else {
	View::load("404");
}




 ?>