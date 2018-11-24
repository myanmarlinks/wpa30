<?php 
class Dog {
	public $name;
	private $data = [];
	public function bark() {
		echo "Bark!";
	}
	public function __set($key, $value) {
		$data[$key] = $value;
	}
	public function __get($key) {
		if(array_key_exists($key, $data)) {
			return $data[$key];
		} else {
			trigger_error("Key does not exist", E_USER_WARNING);
		}
	}
}
$dog = new Dog;
$dog->name = "Aung Net";
$dog->color = "White";
echo $dog->color;
$dog->bark();












 ?>