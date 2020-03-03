<?php

	//查询某个新闻信息，放到表单中
	header('Content-type:text/html;charset=utf-8');

	//接收要修改的新闻id
	$id = isset($_GET['id'])? $_GET['id'] : 0;
	
	if($id == 0){
		header('Refresh:3;url=news.php');
		echo '当前要删除的新闻不存在';
		exit;
	}
	
	//获取当前id对应的新闻信息
	$sql = "select * from n_news where id = {$id}";
	
	include_once 'news_public.php';
	$res = my_error($sql);
	$new = mysql_fetch_assoc($res);
	
	include_once 'news_edit.html'; 
	