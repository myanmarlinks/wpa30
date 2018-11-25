<?php 
/* Method Chaining */

class DynamicChain {
	public $result = 0;
	public function __construct() {
		echo "DynamicChain Construct! <br>";
	}
	public function sum($num) {
		$this->result += $num;
		return $this;
	}
	public function substract($num) {
		$this->result -= $num;
		return $this;
	}
	public function multiply($num) {
		$this->result *= $num;
		return $this;
	}

	public function divide($num) {
		$this->result /= $num;
		return $this;
	}
}

/*
45 + 56 - 12 * 8 / 6
67 + 78 / 4
68 / 2 + 56 - 76
*/

$dynami = new DynamicChain;

$dynami->sum(45)
	->sum(56)
	->substract(12)
	->multiply(8)
	->divide(6);
echo $dynami->result;
$dynami->result = 0;
$dynami->sum(67)->sum(78)->divide(4);
echo $dynami->result;



?>