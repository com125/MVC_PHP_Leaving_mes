<?php
/* Smarty version 3.1.32-dev-38, created on 2018-05-07 21:08:50
  from 'C:\phpStudy\PHPTutorial\WWW\test\20180507\view\index.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5af04fe2210e38_57861925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c41b0806f9e837240c4217e4d591e9741ec6e0a' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\test\\20180507\\view\\index.html.php',
      1 => 1525698528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af04fe2210e38_57861925 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言版</title>
	<link rel="stylesheet" type="text/css" href="public/bootstrap.min.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="public/jquery-1.10.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/component/layer-v3.0.3/layer/layer.js"><?php echo '</script'; ?>
>
	<style type="text/css">
		#tables th,#tables td{text-align: center;line-height: 34px;vertical-align: middle;}
		.hidden{
        /*width:100px;*/
            /*超出隐藏*/
            overflow: hidden;
            /*文本超出隐藏*/
            text-overflow: ellipsis;
            /*强制一行显示*/
            white-space: nowrap;
    }
	</style>
</head>
<body>
<div class="container">
	<div style='height: 10px;'></div>
	<table id="tables" class="table table-hover">
		<div><a class="btn btn-lg btn-info"  href="http://<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?n=index&m=add">添加留言</a></div>
		<thead>
			<tr>
				<th>编号</th>
				<th>内容</th>
				<th>添加时间</th>
				<th>更新时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>    
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
			<td><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['v']->value['content']);?>
</td>
			<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['add_time']);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['update_time'];?>
</td>
			<td>
				<a class="btn btn-success" href="http://<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?n=index&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>&nbsp;
				<a data_id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="btn btn-danger btn-delete">删除</a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		</tbody>
	</table>
</div>
</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
	$('.btn-delete').click(function(){
		var id = $(this).attr('data_id');
		var rand =  Math.floor(Math.random()*5)+1;//随机 动画 信息框
		var urls = "http://<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?n=index&m=delete";
		var this_tr = $(this).parent().parent();
		var btn_this = $(this);
		// console.log(this_tr);return;
		// console.log(rand);
		 layer.confirm('确定要<span style="color:#f02;font:bold 24px 微软雅黑">'+btn_this.html()+'</span>吗？',{
 		 	btn: ['确定吗?','取消'],
 		 	// skin: 'layui-layer-lan',//按钮
 		 	skin: 'layui-layer-demo',//样式
 		 	anim:rand,//随机 动画 信息框出来的方式
			},function(index){
		 	// alert(btnid);
            $.get(urls,{'id':id}, function(data) {
                console.log(data);
                // return;
                switch(data){
	                case 'true':
	                this_tr.hide(500);
                    setTimeout(function(){
                        this_tr.remove();
                    	window.location.reload();
                    },500);
	                break;
	                case 'false':
	                 layer.open({
                    title:'来自&nbsp;<a href="'+urls+'">'+urls+'</a>&nbsp;的消息',
                    btn:['关闭'],
                    type:1,
                    skin: 'layui-layer-demo',//按钮
                    anim:rand,
                    content:'<div style="margin:20px auto;text-align:center;font:24px 微软雅黑;">false1 <a style="font-size:20px;" class="btn btn-danger"  href="#" title="">删除失败</a></div>',
                    	time:3000
               		 });
	                break;
	                default:
	                break;
            	}
                	layer.close(index);
            });
         });
	})
<?php echo '</script'; ?>
><?php }
}
