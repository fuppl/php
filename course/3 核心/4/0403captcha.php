<?php

	//制作验证码图片
	
	//创建图片资源
	$img = imagecreatetruecolor(200,50);
	
	//背景色
	$bg_color = imagecolorallocate($img,220,220,220);
	imagefill($img,0,0,$bg_color);
	
	//获得随机文字
	//制作目标字符串集合
	$str = '我家住在黄土高坡大风从坡上刮过无论是东南风还是西北风都是我的歌';
	$len = strlen($str);
	$c_len = $len/3;
	//随机取
	$char1 = substr($str,mt_rand(0,$c_len - 1)*3,3);
	$char2 = substr($str,mt_rand(0,$c_len - 1)*3,3);
	
	//写入内容
	$font = 'STXINGKA.TTF';
	$str_color1 = imagecolorallocate($img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
	$str_color2 = imagecolorallocate($img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
	imagettftext($img,mt_rand(20,30),mt_rand(-15,15),60,40,$str_color1,$font,$char1);
	imagettftext($img,mt_rand(20,30),mt_rand(-15,15),140,40,$str_color2,$font,$char2);
	
	//干扰：点和线
	//干扰点
	for($i = 0; $i < 20; $i ++){
		//点，写字符
		$dots_color = imagecolorallocate($img,mt_rand(150,250),mt_rand(150,250),mt_rand(150,250));
		imagestring($img,mt_rand(1,5),mt_rand(0,200),mt_rand(0,50),'*',$dots_color);
	}
	//干扰线
	for($i = 0; $i < 5; $i ++){
		//线，画直线
		$line_color = imagecolorallocate($img,mt_rand(150,250),mt_rand(150,250),mt_rand(150,250));
		imageline($img,mt_rand(0,200),mt_rand(0,50),mt_rand(0,200),mt_rand(0,50),$line_color);
	}
	
	//输出资源
	header('Content-type:image/png');
	imagepng($img);
	
	//销毁资源
	imagedestroy($img);
	