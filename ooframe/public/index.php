<?php 
define("DD", realpath("../"));

/*
Useful Links 
PSR-4 Autoload - https://youtu.be/VGSerlMoIrY 
*/

require DD . "/vendor/autoload.php";

$cat = new Cat();
$dog = new Dog();
Application::add($cat);
Application::add($dog);
class Cat {
	public function __construct() {
		var_dump("Cat Construct!");
	}
	public function meow() {
		var_dump("MEOW! <br>");
	}
}
class Dog {
	public function __construct() {
		var_dump("Dog Construct!");
	}
	public function bark() {
		var_dump("WOOF! <br>");
	}
}



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


Application::remove("cat");
Application::remove("dog");















 ?>