<?php 
	require_once('link.php');
	error_reporting(0);
	$title = trim($_POST['title']);
	$articlecontent = addslashes($_POST['articlecontent']);
	$author = '文士心';
	$date = date("Y-m-d H:i:s");
	if(!($title && $articlecontent)){
		echo "<script>alert('没有输入完整信息！');</script>";
		echo "<script>location:'insert.php';</script>";
	}
	else{
		$insertsql = "insert into blog_article(title, articlecontent, author, date) values('$title', '$articlecontent', '$author', '$date')";
		$insertresult = mysqli_query($link, $insertsql);
		if(!$insertresult){
			die('文章添加失败！'.mysql_error($link));
		}
		else{
			echo "<script>alert('文章添加成功！');</script>";
			echo "<script>location:'insert.html';</script>";
		}
	}
	mysqli_free_result($insertresult);
	mysqli_close($link);
?>