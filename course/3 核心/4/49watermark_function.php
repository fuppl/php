<?php

	//封装水印图制作函数


	/*
	 * 制作水印图
	 * @param1 string $src_image，原图路径
	 * @param2 string $wat_image，水印图路径
	 * @param3 string $path，水印图存储路径
	 * @param4 string &$error,记录错误信息的变量
	 * @param5 int $position = 1，水印加载位置：1代表左上角以此类推9代表右下角
	 * @param6 int $pct = 20，透明度，默认20
	*/
	function watermark($src_image,$wat_image,$path,&$error,$position = 1,$pct = 20){
		//验证原图和水印图都存在
		if(!is_file($src_image)){
			$error = '原图不存在！';
			return false;
		}

		if(!is_file($wat_image)){
			$error = '水印图不存在！';
			return false;
		}

		//判定路径保存是否存在
		if(!is_dir($path)){
			$error = '保存位置不正确！';
			return false;
		}

		//获取图片信息
		$src_info = getimagesize($src_image);
		$wat_info = getimagesize($wat_image);

		//定义一组数据：用来产生对应图片
		$allow = array(
			'image/jpeg' => 'jpeg',	
			'image/jpg' => 'jpeg',	
			'image/gif' => 'gif',	
			'image/png' => 'png',	
			'image/pjpeg' => 'jpeg'	
		);

		//匹配数据
		if(!array_key_exists($src_info['mime'],$allow)){
			$error = '当前文件资源不允许制作水印图！';
			return false;
		}
		if(!array_key_exists($wat_info['mime'],$allow)){
			$error = '当前水印图不允许做资源使用！';
			return false;
		}

		//组合函数
		$src_open = 'imagecreatefrom' . $allow[$src_info['mime']];
		$wat_open = 'imagecreatefrom' . $allow[$wat_info['mime']];
		$src_save = 'image' . $allow[$src_info['mime']];

		//echo $src_open,$wat_open;
		//打开原图资源
		$src = $src_open($src_image);
		$wat = $wat_open($wat_image);
		//var_dump($src,$wat);

		//计算水印图在原图中出现的位置
		$start_x = $start_y = 0;
		switch($position){
			case 1:
				break;	//左上角
			case 2:		//上中
				$start_x = floor(($src_info[0] - $wat_info[0]) / 2);
				break;
			case 3:		//右上
				$start_x = $src_info[0] - $wat_info[0];
				break;
			case 4:		//中左
				$start_y = floor(($src_info[1] - $wat_info[1]) / 2);
				break;
			case 5:		//中间
				$start_x = floor(($src_info[0] - $wat_info[0]) / 2);
				$start_y = floor(($src_info[1] - $wat_info[1]) / 2);
				break;
			case 6:		//中右
				$start_x = $src_info[0] - $wat_info[0];
				$start_y = floor(($src_info[1] - $wat_info[1]) / 2);
				break;
			case 7:		//下右
				$start_y = $src_info[1] - $wat_info[1];
				break;
			case 8:
				$start_x = floor(($src_info[0] - $wat_info[0]) / 2);
				$start_y = $src_info[1] - $wat_info[1];
				break;
			case 9:
				$start_x = $src_info[0] - $wat_info[0];
				$start_y = $src_info[1] - $wat_info[1];
				break;	
		}

		//合并图片资源
		if(imagecopymerge($src,$wat,$start_x,$start_y,0,0,$wat_info[0],$wat_info[1],$pct)){
			//保存图片
			//header('Content-type:' . $src_info['mime']);
			$filename = 'watermark_' . trim(strrchr($src_image , '/'),'/');
			$src_save($src,$path . '/' . $filename);

			//销毁资源
			imagedestroy($src);
			imagedestroy($wat);
			return $filename;
		}else{
			//失败
			$error = '水印图制作（合并）失败！';
			return false;
		}
	}


	//调用函数
	$src_image = '23920.jpg';
	$wat_image = 'my.png';
	$res = watermark($src_image,$wat_image,__DIR__,$error,5);
	if($res){
		echo $res;
	}else{
		echo $error;
	}