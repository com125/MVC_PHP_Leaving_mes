<?php 

class MVC{
	public static $obj = null;
	//模型 model
	public static function M($name){
		include PATH_DIR.'\\model\\'.$name.'Model.class.php';
		$className = $name.'Model';
		self::$obj = new $className();
		return self::$obj;
	}

	//视图 view
	public static function V($name){
		include PATH_DIR.'\\view\\'.$name.'.html.php';
	}

	/*public static function V($name){
		include PATH_DIR.'\\view\\'.$name.'View.class.php';
		$className = $name.'View';
		self::$obj = new $className();
		return self::$obj;
	}*/
	//控制器 controller
	public static function C($name,$method){
		include PATH_DIR.'\\controller\\'.$name.'Controller.class.php';
		$className = $name.'Controller';
		self::$obj = new $className();
		self::$obj->$method();
		return self::$obj;
	}


	//

}
?>