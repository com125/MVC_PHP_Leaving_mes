<?php 

class IndexModel{
	public static $table = '`leave_mes`';//表名
	//查询留言
	public function select(){
		$db = DB::getpdo();
		$sql = 'SELECT * FROM '.self::$table;
		$s = $db->query($sql);
		$data = $s->fetchAll(2);
		$smt = smt::getsmt();
		// var_dump($smt);
		// echo '<pre>';
		$s_name = $_SERVER['SERVER_NAME'];
		// print_r($_SERVER);
		$current = $_SERVER['PHP_SELF'];
		$url = $s_name.$current;
		// echo '</pre>';
		// MVC::V('index');
		$smt->assign('url',$url);
		$smt->assign('data',$data);
		$smt->display('index.html.php');
		// var_dump($arr);
	}
	//AJAX删除
	public function del(){
		$db = DB::getpdo();
		$id = $_GET['id'];
		// echo $id;
		$sql = 'DELETE FROM '.self::$table.' WHERE ID ="'.$id.'"';
		$res = $db->exec($sql);
		return $res?'true':'false';		
	}
	//编辑视图
	public function edit(){
		$db = DB::getpdo();
		$id = $_GET['id'];
		$sql = 'SELECT * FROM '.self::$table.' WHERE ID ="'.$id.'"';
		$s = $db->query($sql);
		$data = $s->fetch(2);
		// var_dump($data);
		$smt = smt::getsmt();
		$data['content'] = htmlspecialchars_decode($data['content']);
		$smt->assign('data',$data);
		$smt->display('edit.html.php');
	}
	//修改操作
	public function update(){
		$db = DB::getpdo();
		$id = $_POST['id'];
		$content = htmlspecialchars($_POST['content']);
		$sql = 'UPDATE '.self::$table.' SET content="'.$content.'" WHERE ID="'.$id.'"';
		// echo $sql;
		$res = $db->exec($sql);
		if($res){
			echo $this->script_jump('修改成功','index.php');
		}else{
			echo $this->script_jump('修改失败','index.php?n=index&m=edit&id='.$id);
		}
	}


	#[JS脚本跳转方法]script_jump
		protected function script_jump($str,$jump_url){
			return '<script>alert("'.$str.'");location.href="'.$jump_url.'";</script>';
		}

	//添加操作
	public function add(){
		$db = DB::getpdo();
		$url = 'index.php?n=index&m=add';
		$content = htmlspecialchars($_POST['content']);
		$sql = 'INSERT INTO '.self::$table.'(content,add_time) value("'.$content.'","'.time().'")';
		$res = $db->exec($sql);
		if($res){
			echo $this->script_jump('添加成功',$url);
		}else{
			echo $this->script_jump('添加失败',$url);
		}
	}

}

?>