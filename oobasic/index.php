<?php 
class Animal {
	public $name;
	public function eat() {
		echo "Eat! <br>";
	}
}
trait Human {
	public function dance() {
		echo "Dance! <br>";
	}
}
trait Alien {
	public function foo() {
		echo "Foo! <br>";
	}
}
class Dog extends Animal {
	use Human, Alien;

	public $name;
	public function bark() {
		echo "Bark! <br>";
	}
}
class Cat extends Animal {
	use Human, Alien;

	public function meow() {
		echo "Meow! <br>";
	}
}
$dog = new Dog;
$dog->name = "Aung Net <br>";
$dog->bark();
$dog->eat();
$dog->dance();
$dog->foo();
$cat = new Cat;
$cat->name = "Puppy";
$cat->meow();
$cat->dance();

?>		