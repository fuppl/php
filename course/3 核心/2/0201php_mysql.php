<?php

	//php与mysql操作 ：基本连接
	//建立连接
	$link = mysql_connect('localhost:3305','root','root');
	//var_dump($link);
	
	//设定字符集
	//$res = mysql_query('set names utf8');	//此处没有“-”，因为mysql不识别
	$res = mysql_set_charset('utf8');
	//var_dump($res);
	
	//选择数据库
	$res = mysql_query('use test');
	//var_dump($res);
	
	
	
	//关闭连接
	//$res = mysql_close($link);
	//var_dump($res);