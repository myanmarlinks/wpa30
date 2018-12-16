<?php 
	
class DB extends PDO {
	private static $_instance;
	private $statement = "";
	private $table_name;
	private $find = false;
	private $find_id = null;

    public function __construct($options=null) {
        parent::__construct(
        	'mysql:host='
        	. Config::get("database.hostname")
        	.';port='. Config::get("database.port")
        	.';dbname='. Config::get("database.dbname"),
        	Config::get("database.username"),
			Config::get("database.password"));
        dump("DB Constructed!");
    }

    public function __destruct() {
    	dump("DB Destructed!");	
    }

	public static function table($table_name) {
		if(!self::$_instance instanceof DB) {
			self::$_instance = new DB();
		}

		self::$_instance->table_name = $table_name;
		self::$_instance->find = false;
		self::$_instance->find_id = null;
		return self::$_instance;
	}

	public function find($id) {
		$this->find = true;
		$this->find_id = $id;
		$this->statement = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
		return $this;

	}

	public function get() {
		if($this->find) {
			$prep = $this->prepare($this->statement);
			$prep->execute([
				'id'	=> $this->find_id
			]);
			return $prep->fetchAll(PDO::FETCH_CLASS);
		} else {
			$query = $this->query("SELECT * FROM " 
			. $this->table_name);
		return $query->fetchAll(PDO::FETCH_CLASS);	
		}
		

	}
}

 ?>