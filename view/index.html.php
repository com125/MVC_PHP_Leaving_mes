<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言版</title>
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
	<table id="tables" class="table table-hover">
		<div><a class="btn btn-lg btn-info"  href="http://{{$url}}?n=index&m=add">添加留言</a></div>
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
		{{if isset($data)}}
		{{foreach $data as $k=>$v}}    
		<tr>
			<td>{{$v['id']}}</td>
			<td>{{htmlspecialchars_decode($v['content'])}}</td>
			<td>{{date('Y-m-d H:i:s',$v['add_time'])}}</td>
			<td>{{$v['update_time']}}</td>
			<td>
				<a class="btn btn-success" href="http://{{$url}}?n=index&m=edit&id={{$v['id']}}">修改</a>&nbsp;
				<a data_id="{{$v['id']}}" class="btn btn-danger btn-delete">删除</a>
			</td>
		</tr>
		{{/foreach}}
		{{/if}}
		</tbody>
	</table>
</div>
</body>
</html>
<script type="text/javascript">
	$('.btn-delete').click(function(){
		var id = $(this).attr('data_id');
		var rand =  Math.floor(Math.random()*5)+1;//随机 动画 信息框
		var urls = "http://{{$url}}?n=index&m=delete";
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
</script>