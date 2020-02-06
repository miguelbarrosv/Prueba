<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b64e6ccc3ae341";$this->pass="c51e1eb8";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_d59565734555052";
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
