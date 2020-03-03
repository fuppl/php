<?php

	//php操作myslq的公共文件
	//中文处理
	header('Content-type:text/html;charset=utf-8');
	//连接初始化
	mysql_connect('localhost:3305','root','root') or die('数据库连接失败');
	
	//封装mysql错误检查函数并处理
	/*
	 * @param1 string $sql， 要执行的sql语句
	 * return $res，执行正确返回的结果集，错误直接终止
	*/
	function my_error($sql){
		//执行sql
		$res = mysql_query($sql);
		
		//处理可能存在的错误
		if(!$res){
			echo 'sql执行错误，错误编号为'.$mysql_errno().'<br>';
			echo '错误信息为'.$mysql_error();
			//终止错误继续执行
			exit;
		}
		
		return $res;
	}
	
	//字符集处理
	my_error('set names utf8');
	//选择数据库
	my_error('use News');
	