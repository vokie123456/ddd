<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>laravel 留言</h1>
	<table>
		<tr>
			<td>标题</td>
			<td>内容</td>
			<td>操作</td>
		</tr>
		<?php foreach($msg as $m) { ?>
		<tr>
			<td><?php echo $m->title; ?></td>
			<td><?php echo $m->content; ?></td>
			<td>
				<a href="/msg/del/<?php echo $m->id; ?>">删除</a>
				<a href="/msg/up/<?php echo $m->id; ?>">编辑</a>
			</td>
		</tr>	
		<?php } ?>
	</table>
</body>
</html>