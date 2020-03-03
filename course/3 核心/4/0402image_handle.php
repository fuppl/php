<?php

	//GD图片处理
	
	//创建画布资源
	$img = imagecreatetruecolor(100,100);	//黑色图片（无色）
	
	//分配颜色
	$bg_color = imagecolorallocate($img,255,0,0);//返回颜色句柄（一组数字）
	//var_dump($color);
	
	//填充背景色
	imagefill($img, 0, 0, $bg_color);
	
	//制作直线
	$line_color = imagecolorallocate($img,0,0,255);
	imageline($img,0,0,100,100,$line_color);
	
	//制作矩形
	$rec_color = imagecolorallocate($img,0,255,0);
	imagerectangle($img,10,10,90,90,$rec_color);
	
	//制作一段圆弧
	$arc_color = imagecolorallocate($img,0,0,0);
	imagearc($img,50,50,80,80,180,360,$arc_color);
	
	//写入英文字符串
	$str_color = imagecolorallocate($img,100,100,100);
	imagestring($img,5,20,20,'abcd',$str_color);
	
	//写入中文汉字
	$ch_color = imagecolorallocate($img,255,255,255);
	imagettftext($img,18,45,50,50,$ch_color,'STXINGKA.TTF','中');
	
	//保存到本地
	imagepng($img,'my.png');	//自己创建的画布通常png格式保存
	//输出给浏览器，必须告知浏览器这是图片
	header('Content-type:image/png');
	imagepng($img);
	
	//销毁图片资源
	imagedestroy($img);
	
	
	
	
	
	
	
	
	
	
	