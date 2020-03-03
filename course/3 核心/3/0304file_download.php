<?php

	//文件下载
	
	//解析字符集
	header('Content-type:text/html;charset=utf-8');
	
	$file = '0304file_download.php';
	
	//设定下载响应头
	header('Content-type:application/octem-stream');//以文件流形式传输数据给浏览器
	header('Accept-ranges:bytes');	//以字节方式传递
	header('Content-disposition:attachement;filename='.$file);//附件下载，指定命名
	header('Accept-length:'.filesize($file));
	
	//php5 输出文件：小文件
	//echo file_get_contents($file);
	
	//php4 大文件（带宽不够）
	//方案1：直接读，然后输出
	$f = @fopen($file,'r');
	while($row = fread($f,1024)){
		echo $row;
	}
	
	/*
	//方案2：判断是否结束，然后输出
	while(!feof($f)){
		echo fread($f,1024);
	}
	*/
	
	fclose($f);