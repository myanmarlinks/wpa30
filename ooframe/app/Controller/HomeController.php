<?php 

namespace App\Controller;

class HomeController {
	public function index() {
		\View::load("blog");
	}
}

 ?>