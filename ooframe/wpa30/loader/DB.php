<?php 
	
class DB extends PDO {
	private static $_instance;
	private $table_name;

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
		return self::$_instance;
	}

	public function get() {
		$query = $this->query("SELECT * FROM " . $this->table_name);
		return $query->fetchAll(PDO::FETCH_CLASS);

	}
}

 ?>