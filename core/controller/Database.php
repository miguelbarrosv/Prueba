<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b34e02b63c620a";$this->pass="a7c71b16";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_0de18a73e0d1ab5";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
