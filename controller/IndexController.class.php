<?php 

class IndexController{
	//查询视图
	public function index(){
		// var_dump(DB::getpdo());
		MVC::M('Index')->select();
	}
	//添加视图
	public function add(){
		MVC::V('add');
	}
 	//添加操作
	public function create(){
		// var_dump($_POST);
		MVC::M('Index')->add();

	}
	//编辑视图
	public function edit(){
		MVC::M('Index')->edit();
	}

	//修改
	public function update(){
		MVC::M('Index')->update();
	}
	//删除操作
	public function delete(){
		echo MVC::M('Index')->del();
	}
}
?>