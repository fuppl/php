<?php

	header('Content-type:text/html;charset=utf-8');
	//获取所有新闻内容并显示
	
	//操作数据库获取数据
	include_once 'news_public.php';
	
	$sql = "select * from n_news;";
	
	$res = my_error($sql);
	
	//循环遍历结果集，将每一条结果数组放到一个数组中，形成一个二维数组
	$news = array();	//保存取出的新闻记录
	
	/*
	//方案一：取出记录数，for循环
	$num = mysql_num_rows($res);
	for($i = 0; $i < $num; $i ++){
		$news[] = mysql_fetch_assoc($res);
	}
	print_r($news);
	*/
	
	//方案二：while循环
	while($row = mysql_fetch_assoc($res)){
		$news[] = $row;
	}
	//print_r($news);
	
	//包含显示模板
	include_once 'news.html';