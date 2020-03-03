<?php

	//等比例缩略图
	
	//得到原图资源
	$src_image= '23920.jpg';
	//获取图片信息
	$src_info = getimagesize($src_image);
	//var_dump($src_info);
	
	$src = imagecreatefromjpeg($src_image);
	//var_dump($src);
	
	//制作缩略图资源
	$dst = imagecreatetruecolor(320,320);
	//填充背景色
	$dst_color = imagecolorallocate($dst,255,255,255);
	imagefill($dst,0,0,$dst_color);
	
	//计算缩略图从原图采样的宽和高（到底是宽还是高被填满 ）
	$thumb_b = 320 / 320;
	$src_b = $src_info[0] / $src_info[1];
	
	$thumb_x = $thumb_y = 0;//缩略图宽高
	$start_x = $start_y = 0;//起始位置
	
	//比较
	if($thumb_b >= $src_b){
		//缩略图宽高比比原图大
		$thumb_y = 320;
		$thumb_x = floor($src_b * $thumb_y);
		$start_x = floor((320 - $thumb_x)/2);
	}else{
		$thumb_x = 320;
		$thumb_y = floor($thumb_x / $src_b);
		$start_y = floor((320 - $thumb_y)/2);
	}
	
	//采样复制
	$res = imagecopyresampled($dst, $src,$start_x,$start_y,0,0,$thumb_x,$thumb_y,$src_info[0],$src_info[1]);
	//var_dump($res);
	
	//输出资源
	header('Content-type:image/png');
	imagepng($dst);
	
	//销毁资源
	imagedestroy($src);
	imagedestroy($dst);