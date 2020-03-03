<?php

	//文件目录操作
	
	//创建目录
	//$res = @mkdir('dir');	//@错误抑制符
	//var_dump($res);
	
	//删除目录
	//$res = @rmdir('dir');
	//var_dump($res);
	
	//读取目录
	$res = opendir('1 php');
	//var_dump($res);
	//echo readdir($res).'<br>';
	//echo readdir($res).'<br>';
	//echo readdir($res).'<br>';
	
	/*
	//循环遍历
	while($file = readdir($res)){
		echo $file.'<br>';
	}
	*/
	
	//遍历文件夹
	var_dump(scandir('2 mysql'));