<?php 

define("DD", realpath("../"));

require DD . "/wpa30/functions.php";
require DD . "/wpa30/database.php";
require DD . "/app/controllers/controllers.php";

$test = _config_get("app.cache.driver.one");
$servername = _config_get("database");

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

 