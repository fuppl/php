<?php

	header('Content-type:text/html;charset=utf-8');
	//添加新闻
	//var_dump($_POST);
	
	//接受数据
	$title = isset($_POST['title']) ? trim($_POST['title']):'';//防止用户直接访问这个文件没有数据输入报错
	$isTop = isset($_POST['isTop']) ? (integer)$_POST['isTop']:2;
	$content = isset($_POST['content']) ? trim($_POST['content']):'';
	$publisher = isset($_POST['publisher']) ? trim($_POST['publisher']):'佚名';
	
	//验证数据
	if(empty($title) || empty($content)){
		//提示同时回到提交页面
		header('Refresh:3;url=news_add.html'); //header 前不能有输出,refresh 不会组织脚本执行
		
		//标题或内容为空,阻止继续执行
		exit( '标题和内容均不能为空');
	}
	
	//数据入库
	include_once 'news_public.php';
	
	$time = time();
	$sql = "insert into n_news values (null, '{$title}', '{$isTop}', '{$content}', '{$publisher}',{$time});";
	
	$insert_id = my_error($sql);
	
	//提示操作成功，跳转到列表页
	header('Refresh:3;url=news.php');
	echo $title . '增加成功';