<?php 
define("DD", realpath("../"));

/*
Useful Links 

https://youtu.be/VGSerlMoIrY 
*/

require DD . "/vendor/autoload.php";

use App\Controller\TestController;
use App\Model\TestModel;

$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$script_name = explode("/", $_SERVER['SCRIPT_NAME']);
$uri = array_values(array_diff($request_uri, $script_name));

if(empty($uri)) {
	$page = "home";
} else {
	$page = $uri[0];
}

call_user_func_array([new TestModel(), 'index'], []);

$routes = [
	'home'	=> 'HomeController@index',
	'blog'	=> 'BlogController@index'
];





 ?>