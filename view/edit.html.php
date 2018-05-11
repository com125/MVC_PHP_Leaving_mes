<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言修改</title>
	<link rel="stylesheet" type="text/css" href="public/bootstrap.min.css">
	<script type="text/javascript" src="public/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="public/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/component/layer-v3.0.3/layer/layer.js"></script>
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
			<textarea name="content" rows="10" class="form-control">{{$data['content']}}</textarea>
			<input type="hidden" name="id" value="{{$data['id']}}">
			<div style="height: 10px;"></div>
			<input class="btn btn-success btn-lg col-lg-3" type="submit" value="提交">
			<input class="btn btn-warning btn-lg col-lg-1 col-sm-offset-1" type="reset" value="取消">
	</form>
</div>
</body>
</html>