<?php 
header('Content-type:text/html;charset=UTF-8');

$n = isset($_GET['c'])?$_GET['c']:'index';//控制器名
$m = isset($_GET['m'])?$_GET['m']:'index';//方法名

$path = __DIR__;//当前文件目录__FILE__文件路径
define('PATH_DIR',$path);
// echo $path;
require_once PATH_DIR.'\\config\\smt.php';//smart模板引擎
include_once PATH_DIR.'\\config\\DB.php';//PDO数据资源
include_once PATH_DIR.'\\config\\MVC.php';//MVC静态调用文件
// var_dump(smt::getsmt());
// var_dump(DB::getpdo());
MVC::C($n,$m);
?>