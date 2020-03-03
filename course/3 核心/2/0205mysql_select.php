<?php
	
	//查询

	//引入初始文件
	include_once '0203database.php';
		
	$sql = "select * from n_news;";
	
	$res = mysql_query($sql);
	//var_dump($res);
	echo '<pre>';
	
	$rows = mysql_num_rows($res);
	
	//解析结果集，所有mysql_fetch函数公用一个指针
	/*
	$row = mysql_fetch_assoc($res);//获取关联数组，包括一条数据的所有内容，然后指针下移；
	echo '<pre>';
	//print_r($row);
	
	
	$row = mysql_fetch_row($res);//获取索引数据，索引从0开始，然后指针下移；
	print_r($row);
	*/
	
	//mysql_fetch_array
	
	//默认
	echo '默认';
	$row = mysql_fetch_array($res);
	print_r($row);
	
	echo '获取两种数组';
	$row = mysql_fetch_array($res,MYSQL_BOTH);
	print_r($row);
	
		echo '获取关联数组';
	$row = mysql_fetch_array($res,MYSQL_ASSOC);
	print_r($row);
	
		echo '获取索引数组';
	$row = mysql_fetch_array($res,MYSQL_NUM);
	print_r($row);
	
