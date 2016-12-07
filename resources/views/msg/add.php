<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>laravel添加留言</h1>
	<form action="" method="post">
		<p>
			标题：<input type="text" name="title">
		</p>
		<p>
			内容：<textarea name="content" id="" cols="30" rows="10"></textarea>
		</p>
		<input type="submit" name="提交">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	</form>
</body>
</html>