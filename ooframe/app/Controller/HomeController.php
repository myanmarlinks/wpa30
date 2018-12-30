<?php 

namespace App\Controller;

class HomeController {
	public function index() {
		$cat = \Application::get("cat");
		$cat->meow();
		$dog = \Application::get("dog");
		$dog->bark();
		$anotherDog = \Application::get("dog");
		$anotherDog->bark();
		// $students = \DB::table("students")
		// 			->get();
		// // $categories = \DB::table("categories")
		// // 			->get();
		// $student = \DB::table("students")->find(2)->get();
		// $mystudents = \DB::table("students")->select(['id', 'name'])->get();
		// dump($students);
		// dump($mystudents);
		// dump($student, true);
		// \View::load("blog");
	}
}

 ?>