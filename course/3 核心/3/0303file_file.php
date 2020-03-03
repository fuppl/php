<?php

	//php文件编程：文件操作
	//php5操作
	$file = 'content.txt';
	//$content = @file_get_contents($file);
	//var_dump($content);
	
	$txt = 'hello world';
	//$res = file_put_contents($file,$txt);
	//var_dump($res);
	
	//php4操作（php7还有这个函数）
	$f = fopen($file,'r');
	//var_dump($f);
	$info = fread($f,10);
	echo $info;
	fclose($f);