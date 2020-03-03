<?php

	//缩略图
	//制作固定尺寸的缩略图按照固定大小制作，可能造成失真
	//得到原图资源
	$src_image= '23920.jpg';
	$src = imagecreatefromjpeg($src_image);
	//var_dump($src);
	
	//制作缩略图资源
	$dst = imagecreatetruecolor(320,180);
	
	//采样复制
	$res = imagecopyresampled($dst, $src,0,0,0,0,320,180,imagesx($src),imagesy($src));
	//var_dump($res);
	
	//输出资源
	header('Content-type:image/png');
	imagepng($dst);
	
	//销毁资源
	imagedestroy($src);
	imagedestroy($dst);