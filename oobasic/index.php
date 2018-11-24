<?php 
class Dog {
	public $name;
	private $data = [];
	public function bark() {
		echo "Bark!";
	}
	public function __construct($name) {
		echo "Construct! <br>";
		$this->name = $name;
	}
	public function __destruct() {
		echo "<br> Class Destroyed! <br>";
	}
	public function __call($method, $arguments) {
		var_dump($method);
		var_dump($arguments);
	}

	public static function __callStatic($method, $arguments) {
		var_dump($method);
		var_dump($arguments);	
	}
	public function __set($key, $value) {
		$this->data[$key] = $value;
	}
	public function __get($key) {
		if(array_key_exists($key, $this->data)) {
			return $this->data[$key];
		} else {
			trigger_error("Key does not exist", E_USER_WARNING);
		}
	}
	
 }

Dog::run("fast");
$dog = new Dog("Puppy");
$dog->color = "White";
echo $dog->color;
$dog->bark();
$dog->dance("Break", "Hip Hop");
$dogTwo = new Dog("Aung Net");
$dogThree = new Dog("Foo");
$dogTwo->bark();
$dogThree->bark();













 ?>