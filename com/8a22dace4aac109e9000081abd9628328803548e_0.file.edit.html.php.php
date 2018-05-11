<?php
/* Smarty version 3.1.32-dev-38, created on 2018-05-07 20:59:28
  from 'C:\phpStudy\PHPTutorial\WWW\test\20180507\view\edit.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5af04db0dc0e56_92013046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a22dace4aac109e9000081abd9628328803548e' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\test\\20180507\\view\\edit.html.php',
      1 => 1525697966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af04db0dc0e56_92013046 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言修改</title>
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
	<div><a class="btn btn-lg btn-info"  href="index.php">返回</a></div>
	<form action="index.php?n=index&m=update" method="POST" accept-charset="utf-8">
			<h2>留言内容：</h2>
			<textarea name="content" rows="10" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</textarea>
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
			<div style="height: 10px;"></div>
			<input class="btn btn-success btn-lg col-lg-3" type="submit" value="提交">
			<input class="btn btn-warning btn-lg col-lg-1 col-sm-offset-1" type="reset" value="取消">
	</form>
</div>
</body>
</html><?php }
}
