<?php
	error_reporting(0);
	$password = $_POST['password'];
	if($password == 'jk1508weizhiwen')
	{
		echo "<script>location='insert.html';</script>";
	}
	else
	{
		echo "<script>alert('密码错误！');</script>";
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>登录</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
 <body>
 	<div class="container">
	 	<center>
	 		<form action="check.php" method="post" accept-charset="utf-8">
 			<input type="password" name="password" placeholder="请输入管理员密码" maxlength="15">
 			<input type="submit" value="登录">
 		</form>
	 	</center>
 	</div>
 </body>
 </html>