<?php 

class DB{
	public static $pdo = null;

	public static function getpdo($dbname = null){
		if(is_null(self::$pdo)){
			require_once(PATH_DIR.'\\config\\database.php');
			if(is_null($dbname)){
				$dbname = 'test';//默认测试数据库
			}
			//链接数据库 
	     	$dsn  ="mysql:host=".DB_HOST.";dbname=".$dbname.";charset=utf8;port=".DB_PORT;
	        $pdo = new  PDO($dsn,DB_NAME,DB_PASS);
	        $pdo->setAttribute(3,1);//设置返回的数据是键值对数组
			self::$pdo = $pdo;
			return self::$pdo;
		}
		return self::$pdo;
	}
}
?>