<?php 
echo StaticChain::getInstance()->sum(45)->sum(34)->divide(2)->get();
echo "<br>";

echo StaticChain::getInstance()->sum(6700)->divide(2)->get();
echo "<br>";
class StaticChain {
	private static $_instance;
	public $result = 0;

	public function __construct() {
		echo "Static Chain Construct! <br>";
	}
	public function __destruct() {
		echo "Static Chain Destory! <br>";
	}

	public static function getInstance() {
		if(!self::$_instance instanceof StaticChain) {
			self::$_instance = new StaticChain();
		}
		self::$_instance->result = 0;
		return self::$_instance;
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

	public function get() {
		return $this->result;
	}
}













