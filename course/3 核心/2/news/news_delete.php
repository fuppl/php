<?php

	header('Content-type:text/html;charset=utf-8');
	//删除新闻
	
	//接收要删除的新闻id
	$id = isset($_GET['id'])? $_GET['id'] : 0;
	
	if($id == 0){
		header('Refresh:3;url=news.php');
		echo '当前要删除的新闻不存在';
		exit;
	}
	
	$sql = "delete from n_news where id = {$id}";
	include_once 'news_public.php';
	my_error($sql);
	header('Refresh:3;url=news.php');
	echo '删除成功';