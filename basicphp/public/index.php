<?php 

define("DD", "../");
require DD . "wpa30/functions.php";
require DD . "app/controllers/controllers.php";

$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$script_name = explode("/", $_SERVER['SCRIPT_NAME']);
$uri = array_values(array_diff($request_uri, $script_name));

if(empty($uri)) {
	$page = "home";
} else {
	$page = $uri[0];
}

$controller = "_" . $page . "controller";
if(function_exists($controller)) 
{
	call_user_func($controller);
} else {
	_load_view("404");
}

 ?>

 