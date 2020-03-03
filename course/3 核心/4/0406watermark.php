<?php

	//制作固定位置水印图
	
	//指定图片
	$src_image = '23920.jpg';
	$wat_image = 'my.png';
	$dst = imagecreatefromjpeg($src_image);
	$wat = imagecreatefrompng($wat_image);
	//var_dump($wat);
	
	//合并图片
	$res = imagecopymerge($dst, $wat, 0,0,0,0, imagesx($wat), imagesy($wat),50);
	//var_dump($res);
	
	//保存输出
	header('Content-type:image/jpeg');
	imagejpeg($dst);
	
	
	//销毁资源
	imagedestroy($dst);
	imagedestroy($wat);
	