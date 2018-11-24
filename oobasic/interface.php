<?php 

interface DogInterface {
	public function bark();
	public function bite();
 }

 interface AnimalInterface {
 	public function eat();
 }

 class Dog implements DogInterface, AnimalInterface {
 	public $name;
 	public function bark() {
 		echo "bark!";
 	}

 	public function bite() {
 		echo "Bite!";
 	}
 }

 $dog = new Dog();


