<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>后台管理</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="http://cdn.bootcss.com/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<div class="container">
		<form id="form" class="form-inline" action="update"  method="get">
		
	<table class="table table-striped">
	<caption style="text-align: center;"><h1>浙江格凌实业业务员电话配置</h1></caption>
      <thead>
        <tr>
          <th>#</th>
          <th>姓名</th>
          <th>电话</th>
          <th>状态</th>
        </tr>
      </thead>
      <tbody>
			<?php
 @define('feifa',ture); require 'inc/common.php'; $_result=mysql_query("select id,tel,name,status from salers where 1=1"); $num_rows= mysql_num_rows($_result); while($_rows=mysql_fetch_array($_result)){ echo '<tr>'; echo '<th scope="row">'.$_rows['id'].'<input type="hidden" name="id[]" value="'.$_rows['id'].'"></th>'; echo '<td scope="row"><input type="text" class="form-control" name="name[]"  placeholder="姓名" value="'.$_rows['name'].'"></td>'; echo '<td scope="row"><input type="text" class="form-control" name="tel[]"  placeholder="电话" value="'.$_rows['tel'].'"></td>'; if($_rows['status'] =="true"){ echo '<td><input type="checkbox" name="checkbox" value="true" checked></td>'; }else{ echo '<td><input type="checkbox" name="checkbox" value="false" unchecked></td>'; } } ?>
		      </tbody>
		      <tfoot>
		      	<tr><td>
		      	 <button id="update" type="submit" class="btn btn-default">确认修改</button>
		      	 <input  name="check"  type="hidden"  value="">
		      	</td></tr>
		      </tfoot>
    	</table>	
    	</form>
	</div>
</div>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
<script type="text/javascript">
	$("[name='checkbox']").bootstrapSwitch();
	$('input[name="checkbox"]').on('switchChange.bootstrapSwitch', function(event, state) {
		  this.value = state;
		});
	$("#update").click(function(event){
		event.preventDefault();
		
		var array =[];
		$('input[name="checkbox"]').each(function(index){
			array.push($(this).val());
		});
		$('input[name="check"]')[0].value = array;
		$("#form").submit();
	});
</script>

</body>
</html>