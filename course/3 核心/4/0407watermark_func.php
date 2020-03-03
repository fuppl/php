<?php

	//水印制作函数
	
	/*
	 * 制作水印图
	 * @param1 string $src_image ，原图路径
	 * @param2 string $wat_image ，水印图路径
	 * @param3 string $path ，水印图存储路径
	 * @param4 string &$error ，错误信息
	 * @param5 int $position =1 ，水印位置，1代表左上角以此类推，9代表右下角
	 * @param6 int $pct = 50 ，透明度
	 * 
	*/
	function watermark($src_image, $wat_image, $path, &$error, $position = 1, $pct = 50){
		//验证原图和水印图都存在
		if(!is_file($src_image) || !is_file($wat_image)){
			$error = '原图或水印图不存在';
			return false;
		}
		
		//判断保存路径是否存在
		if(!is_dir($path)){
			$error = '保存路径不正确';
			return false;
		}
		
		//获取图片信息
		$src_info = getimagesize($src_image);
		$wat_info = getimagesize($wat_image);

		//定义一组数据，用来产生对应的图片
		$allow = array(
			'image/jpeg' => 'jpeg',
			'image/jpg' => 'jpeg',
			'image/gif' => 'gif',
			'image/png' => 'png',
			'image/pjpeg' => 'jpeg'
		);
		
		//匹配数据
		if(!array_key_exists($src_info['mime'],$allow)){
			$error = '当前文件资源不允许制作水印图';
			return false;
		}
		if(!array_key_exists($wat_info['mime'],$allow)){
			$error = '当前水印图不可用作资源';
			return false;
		}
		
		//组合函数
		$src_open = 'imagecreatefrom'.$allow[$src_info['mime']];
		$wat_open = 'imagecreatefrom'.$allow[$wat_info['mime']];
		$src_save = 'image'.$allow[$src_info['mime']];
		//echo $src_open,$wat_open;
		
		//打开图片资源
		$src = $src_open($src_image);
		$wat = $wat_open($wat_image);
		//var_dump($src,$wat);
		
		//计算水印图在原图中的位置
		$start_x = $start_y = 0;
		switch($position){
			case 1:
				break;//左上角
			case 2:
				$start_x = floor(($src_info[0] - $wat_info[0])/2);
				break;
			case 3:
				$start_x = $src_info[0] - $wat_info[0];
				break;
			case 4:
				$start_y = floor(($src_info[1] - $wat_info[1])/2);
				break;
			case 5:
				$start_x = floor(($src_info[0] - $wat_info[0])/2);
				$start_y = floor(($src_info[1] - $wat_info[1])/2);
				break;
			case 6:
				$start_x = $src_info[0] - $wat_info[0];
				$start_y = floor(($src_info[1] - $wat_info[1])/2);
				break;
			case 7:
				$start_y = $src_info[1] - $wat_info[1];
				break;
			case 8:
				$start_x = floor(($src_info[0] - $wat_info[0])/2);
				$start_y = $src_info[1] - $wat_info[1];
				break;
			case 9:
				$start_x = $src_info[0] - $wat_info[0];
				$start_y = $src_info[1] - $wat_info[1];
				break;
		}
		
		//合并图片资源
		if (imagecopymerge($src,$wat,$start_x,$start_y,0,0,imagesx($wat), imagesy($wat),$pct)){
			//成功
			//header('Content-type:'.$src_info['mime']);
			$filename = 'watermark_'.'.'.trim(strrchr($src_image,'.'),'.');
			$src_save($src,$path.'/'.$filename);
			
			//关闭图片资源
			imagedestroy($src);
			imagedestroy($wat);
			
			return $filename;
		}else{
			//失败
			$error = '水印图制作失败';
			return false;
		}
	}
	
	//调用函数
	$src_image = '23920.jpg';
	$wat_image = 'my.png';
	$path = __DIR__;//当前路径
	$res = watermark($src_image, $wat_image, $path, $error,3,50);
	if($res){
		echo $res;
	}else{
		echo $error;
	}
	
	
	
	
	
	
	
	
	
	
	