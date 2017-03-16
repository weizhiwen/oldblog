<?php 
	require_once('link.php');
	$id = $_GET['id'];
	$selectsql = "select * from blog_article where id='$id'";
	$result = mysqli_query($link, $selectsql);
	if($result){
		$row = mysqli_fetch_assoc($result);
		$title = $row['title'];
		$articlecontent = stripslashes($row['articlecontent']);
		$author = $row['author'];
		$date = $row['date'];
	}
	else{
		echo "<script>alert('没有该文章！');</script>";
		exit;
	}
	mysqli_free_result($result);
	mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../img/blog.ico">
	<title>文士心的博客</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<!-- 导航栏开始 -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" style="background: #285078; opacity: 0.5;">
			        <span class="sr-only">切换导航</span>
			        <span class="icon-bar" style="background: black;"></span>
			        <span class="icon-bar" style="background: black;"></span>
			        <span class="icon-bar" style="background: black;"></span>
			      </button>
			      <img src="../img/person.jpg" alt="文士心的头像" class="img-circle">
			      <a class="navbar-brand" href="http://wenshixin.cc" style="color: #000"> <span></span>文士心的Blog</a>
			    </div>
			    <div class="collapse navbar-collapse" id="navigation">
			      <ul class="nav navbar-nav navbar-left">
			        <li><a href="../index.html" style="color: #dc1414;"><span class="glyphicon glyphicon-home"></span> 博客主页 </a></li>
			        <li class="active"><a href="#" style="color: #a06428;"><span class="glyphicon glyphicon-th-large"></span> 我的博客 <span class="sr-only">(当前状态)</span></a></li>
			        <li><a href="../share/" style="color: #f08c28;"><span class="glyphicon glyphicon-share"></span> 资料分享 </a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="../link/" style="color: #283c3c;"><span class="glyphicon glyphicon-link"></span> 友情链接 </a></li>
			        <li><a href="../about/" style="color: #b478c8;"><span class="glyphicon glyphicon-zoom-in"></span> 关于本站 </a></li>
			        <li><a href="../words/" style="color: #dc8c8c;"><span class="glyphicon glyphicon-pencil"></span> 给我留言 </a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #3c2828;"><span class="glyphicon glyphicon-cog"></span> 更多··· <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li class="dropdown-menu-title" style="color: #502850;">交个朋友</li>
			            <li role="separator" class="divider"></li>
			            <li><a href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=763107756"  target="_blank">加我好友 </a></li>
			            <li><a href="http://user.qzone.qq.com/763107756" target="_blank">QQ空间 </a></li>
			            <li><a href="https://github.com/weizhiwen" target="_blank">GitHub </a></li>
			            <li role="separator" class="divider"></li>
			          </ul>
			        </li>
			      </ul>
			    </div>
			  </div>
		  </div>
		</nav>
		<!-- 导航栏结束 -->
		<div class="blog-body">
			<div class="container">
				<div class="blog-article col-md-12">
						<?php
							echo "<article class='article'>";
								echo "<h2>{$title}</h2><small>作者：{$author}</small>";
								echo "<p>{$articlecontent}</p>";
							echo "</article>";
						?>
						<h2>留言区</h2>
						<p class="mydivider"></p>
						<div class="commentfield">
							<div class="writecomment">
								<div id="uyan_frame"></div>
								<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js"></script>
							</div>
						</div>
				</div>
			</div>
			<footer class="footer">
				Copyright &copy;2016-2017 wenshixin.cc All Rights Reserved<br>
				版权所有：文士心&nbsp;&nbsp;
				<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261498280'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261498280%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>
			</footer>
		</div>
		<script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
</body>
</html>