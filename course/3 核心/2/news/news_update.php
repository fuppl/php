<?php 
	//更新新闻
	header('Content-type:text/html;charset=utf-8');

	//接收要修改的新闻id
	$id = isset($_POST['id'])? intval($_POST['id']) : 0;
	
	if($id == 0){
		header('Refresh:3;url=news.php');
		echo '当前要修改的新闻不存在';
		exit;
	}
	
		//接受数据
	$title = isset($_POST['title']) ? trim($_POST['title']):'';//防止用户直接访问这个文件没有数据输入报错
	$isTop = isset($_POST['isTop']) ? intval($_POST['isTop']):2;
	$content = isset($_POST['content']) ? trim($_POST['content']):'';
	
	//验证数据
	if(empty($title) || empty($content)){
		//提示同时回到提交页面
		header('Refresh:3;url=news.php'); //header 前不能有输出,refresh 不会组织脚本执行
		
		//标题或内容为空,阻止继续执行
		exit( '标题和内容均不能为空');
	}
	
	$sql = "update n_news set title='{$title}', isTop='{$isTop}', content='{$content}' where id = {$id}";
	include_once 'news_public.php';
	my_error($sql);
	header('Refresh:3;url=news.php');
	echo '修改成功';