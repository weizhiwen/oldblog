<?php 
	require_once('link.php');
	$page = $_GET['page'];
	if(!$page)
		$page = 1;
	$selectsql = 'select * from blog_article limit '.(($page-1)*4).',4';
	$result = mysqli_query($link, $selectsql);
	$total_sql = 'select count(*) from blog_article';
	$total_result = mysqli_fetch_array(mysqli_query($link, $total_sql));
	$total_count = $total_result[0];
	$total_page = ceil($total_count/4);
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
	<link rel="stylesheet" href="../css/animate.min.css">
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
			        <li class="active"><a href="index.php" style="color: #a06428;"><span class="glyphicon glyphicon-th-large"></span> 我的博客 <span class="sr-only">(当前状态)</span></a></li>
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
			            <li><a href="check.php" target="_blank">管理员入口</a></li>
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
				<!-- 轮播焦点图开始 -->
				<div id="img-carousel" class="carousel slide img-thumbnail" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#img-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#img-carousel" data-slide-to="1"></li>
				    <li data-target="#img-carousel" data-slide-to="2"></li>
				    <li data-target="#img-carousel" data-slide-to="3"></li>
				    <li data-target="#img-carousel" data-slide-to="4"></li>
				    <li data-target="#img-carousel" data-slide-to="5"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="../img/1.jpg" alt="...">
				      <div class="carousel-caption">
				        <h3 class="animated zoomInDown" style="animation: zoomInDown 3s;">我的世界</h3>
				        <p></p>
				      </div>
				    </div>
				    <div class="item">
				      <img src="../img/2.jpg" alt="...">
				      <div class="carousel-caption">
				        <h3 class="animated wobble" style="animation: wobble 3s;">我的世界</h3>
				        <p></p>
				      </div>
				    </div>
				    <div class="item">
				      <img src="../img/3.jpg" alt="...">
				      <div class="carousel-caption">
				        <h3 class="animated zoomInDown infinite" style="animation: zoomInDown 2s;">我的世界</h3>
				        <p></p>
				      </div>
				    </div>
				    <div class="item">
				      <img src="../img/4.jpg" alt="...">
				      <div class="carousel-caption">
				        <h3 class="animated zoomInUp infinite" style="animation: zoomInUp 2s;">我的世界</h3>
				        <p></p>
				      </div>
				    </div>
				    <div class="item">
				      <img src="../img/5.jpg" alt="...">
				      <div class="carousel-caption">
				        <h3 class="animated bounceOut infinite" style="animation: bounceOut 1s;">我的世界</h3>
				      </div>
				    </div>
				    <div class="item">
				      <img src="../img/6.jpg" alt="...">
				      <div class="carousel-caption">
				        <h3 class="animated bounceOutDown infinite" style="animation: bounceOutDown 1.5s;">我的世界</h3>
				      </div>
				    </div>
				  </div>
				  <a class="left carousel-control" href="#img-carousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon glyphicon glyphicon-hand-left" aria-hidden="true"  style="position: absolute; top: 50%;"></span>
				    <span class="sr-only">上一张</span>
				  </a>
				  <a class="right carousel-control" href="#img-carousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"  style="position: absolute; top: 50%;"></span>
				    <span class="sr-only">下一张</span>
				  </a>
				</div>
				<!-- 轮播图内容结束 -->
				<!-- 搜索标签开始 -->
				<div class="blog-search col-md-12" style="margin-top: 1em;">
					<ul class="list-inline list-search col-md-6">
					  <li><a href="search.php?searchkeywords=html" target="_blank">HTML</a></li>
					  <li><a href="search.php?searchkeywords=css" target="_blank">CSS</a></li>
					  <li><a href="search.php?searchkeywords=javascript" target="_blank">Javascript</a></li>
					  <li><a href="search.php?searchkeywords=Bootstrap" target="_blank">Bootstrap</a></li>
					  <li><a href="search.php?searchkeywords=PHP" target="_blank">PHP</a></li>
					  <li><a href="search.php?searchkeywords=Java" target="_blank">Java</a></li>
					  <li><a href="search.php?searchkeywords=C语言" target="_blank">C语言</a></li>
					  <li><a href="search.php?searchkeywords=Cplusplus" target="_blank">C++</a></li>
					  <li><a href="search.php?searchkeywords=数据结构" target="_blank">数据结构</a></li>
					</ul>		
					<form action="search.php" method="get" accept-charset="utf-8" class="col-md-4 col-md-offset-2">
							<input type="search" name="searchkeywords" value="" placeholder="搜索其实很简单" class="article-search" required="required">
							<input type="submit" value="Search" class="sublimt-search">
					</form>
				</div>
				<!-- 搜索标签结束 -->
				<p><strong>按时间排序</strong></p>
				<p class="mydivider col-md-12"></p>
				<!-- 博客文章列表开始 -->
				<div class="blog-article col-md-10 col-md-offset-1">
						<?php
								if($result){
									while($row = mysqli_fetch_assoc($result)){
									$id = stripslashes($row['id']);
									$title = $row['title'];
									$articlecontent01 = htmlspecialchars_decode($row['articlecontent']);
									$articlecontent02 = str_replace("&nbsp;","",$articlecontent01);
									$articlecontent03 = strip_tags($articlecontent02);
									$articlecontent = mb_substr($articlecontent03, 0, 200,"utf-8");
									$author = $row['author'];
									$date = $row['date'];
									echo "<article class='article'>";
										echo "<a href='article.php?id=$id' target='_blank'><h2>{$title}</h2></a><small>作者：{$author}</small>";
										echo "<p>$articlecontent...</p>";
									echo "</article>";
									}
								}
						?>
						<nav aria-label="Page navigation" class="col-md-12 text-center">
							  <ul class="pagination">
							    <li>
									<?php 
										if($page>1)
										{
											echo "<a href='".$_SERVER['PHP_SELF']."?page=1' title='返回首页'>首页</a>";
											echo "<a href='".$_SERVER['PHP_SELF']."?page=".($page-1)."' title='上一页'><span aria-hidden='true'>&laquo;</span>&nbsp;上一页</a>";
										}
									?>
							    </li>
							   	<?php
							   		if($page>0 && $page<$total_page){
								   		for ($i=0; $i < $total_page-1; $i++) {
								   			echo " <li><a href='".$_SERVER['PHP_SELF']."?page=".($page+$i)."'>".($page+$i)."</a></li>";
								   		}
							   		}
							   	?>
							    <li>
								    <?php 
										if($page<$total_page)
										{
											echo "<a href='".$_SERVER['PHP_SELF']."?page=".($page+1)."' title='下一页' aria-label='Next'>下一页&nbsp;<span aria-hidden='true'>&raquo;</span></a>";
											echo "<a href='".$_SERVER['PHP_SELF']."?page=".$total_page."' title='尾页'>尾页</a>";
										}
									?>
							    </li>
							  </ul>
						</form>
						</nav>
				</div>
				<!-- 文章列表结束 -->
			</div>
			<footer class="footer" style="margin-top: 1em;">
				Copyright &copy;2016-2017 wenshixin.cc All Rights Reserved<br>
				版权所有：文士心&nbsp;&nbsp;
				<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261498280'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261498280%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>
			</footer>
		</div>

		<script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
</body>
</html>