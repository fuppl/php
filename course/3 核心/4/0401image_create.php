<?php
	header('Content-type:text/html;charset=utf-8');

	//创建图片资源
	
	//创建一个真彩图片
	$img = imagecreatetruecolor(100,100) or die('图片初始化失败');
	//var_dump($img);
	
	//从已有jpeg图片打开资源
	$img2 = imagecreatefromjpeg('23920.jpg') or die('图片初始化失败');
	var_dump($img2);