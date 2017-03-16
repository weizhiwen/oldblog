<?php 
	header("content-type:text/html; character=utf8");
	$host = "localhost";
	$user = "root";
	$password = "123456";
	$dbname = "blog";
	$link = mysqli_connect($host, $user, $password, $dbname);
	mysqli_set_charset($link, "utf8");
	if(mysqli_connect_errno()){
		die("连接数据库失败！".mysqli_connect_error());
		if(!mysqli_set_charset($link, "utf8")){
			die("设置字符失败：".mysql_error($link));
		}
	}
?>