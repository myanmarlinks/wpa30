<?php 
define("DD", "../");
require DD . "wpa30/functions.php";
require DD . "app/controllers/controllers.php";

$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : "home";

$controller = "_" . $page . "controller";
if(function_exists($controller)) 
{
	call_user_func($controller);
} else {
	_load_view("404");
}

 ?>

 