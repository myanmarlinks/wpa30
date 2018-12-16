<?php 

namespace App\Controller;

class HomeController {
	public function index() {
		$students = \DB::table("students")
					->get();
		$categories = \DB::table("categories")
					->get();
		dump($categories);
		dump($students, true);			

		\View::load("blog");
	}
}

 ?>