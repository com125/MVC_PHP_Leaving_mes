<?php 
include_once(PATH_DIR.'\\config\\smarty\\libs\\Smarty.class.php');


class smt{
	public static $smt;
	public static function getsmt(){
		if(self::$smt == null){
			$smarty = new Smarty();
			//模板目录
			$smarty->setTemplateDir(PATH_DIR.'\\view');
			//生成文件目录
			$smarty->setCompileDir(PATH_DIR.'\\com');
			$smarty->left_delimiter = '{{';
			$smarty->right_delimiter = '}}';
			self::$smt = $smarty;
		}
		return self::$smt;
	}
}

?>