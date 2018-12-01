<?php 

/* Anonymous Functions */

$foo = function($name) {
	echo "Hello World $name <br>";
};

class Test {
	function testTest(string... $value) {
		foreach($value as $v) {
			echo $v . "<br>";
		}
	}
}

$test = new Test;
$test->testTest("Aung Aung", "Maunng Maung");
$test->testTest("Ba Ba");

$foo("Mg Mg");
echo gettype($foo);


?>