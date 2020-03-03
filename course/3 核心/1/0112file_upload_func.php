<?php
	header('Content-type:text/html;charset=UTF-8');
	//把文件上传功能封装成函数
	/*
	 * 实现文件上传（单）
	 * @param1 array $allow_type，允许上传的MIME类型
	 * @param2 string $path ，存储路径
	 * @param3 string &$error，如果出错，出错的原因
	 * @param4 int $max_size = 2000000,允许上传的最大值
	 * @param5 array $allow_format = array()，允许上传的文件格式（后缀名）,=array()表示所有文件都 可以上传
	 * @param6 array $file,需要上传的文件信息（ 一维五元素数组 ,name, tmp_name, error, size, type ）
	*/
	function upload_single($file, $allow_type, $path, &$error, $allow_format = array(), $max_size=2000000){
		//判断文件是否有效
		if(!is_array($file) || !isset($file['error'])){
			//文件无效
			$error = '上传的文件无效';
			return false;
		}
		
		//判断文件存储路径是否有效
		if(!is_dir($path)){
			//路径不存在
			$error = '保存的路径无效';
			return false;
		}
		
		//判断文件上传过程是否出错
		switch($file['error']){
			case 1:
			case 2:
				$error = '文件超出服务器允许大小';
				return false;
			case 3:
				$error = '上传过程出现问题，只上传部分';
				return false;
			case 4:
				$error = '用户没有选择文件';
				return false;
			case 6:
			case 7:
				$error = '文件保存失败';
				return false;
		}
		
		//判断MIME类型
		if(!in_array($file['type'],$allow_type)){
			//文件不允许上传
			$error = '当前文件类型不允许上传';
			return false;
		}
		
		//判断后缀是否允许
		//取出后缀
		$ext = ltrim(strrchr($file['name'],'.'),'.');
		if(!empty($allow_format) && !in_array($ext, $allow_format)){
			//不允许上传
			$error = '当前文件格式不允许上传';
			return false;
		}
		
		//判断当前文件大小是否满足业务需求
		if($file['size'] > $max_size){
			//文件过大
			$error = '当前文件超出大小，可以上传的最大值为'.$max_size.'字节';
			return false;
		}
		
		//构造文件按名，防止重名
		$fullname = strstr($file['type'],'/',true).date('Ymd');
		//构造随机字符串
		for($i = 0; $i < 4; $i++){
			$fullname.= chr(mt_rand(65,91));
		}
		//拼凑后缀
		$fullname .= '.'.$ext;
		
		//移动到指定目录
		if(!is_uploaded_file($file['tmp_name'])){
			//文件不是上传的
			$error = '错误：不是上传文件';
			return false;
		}
		
		if(move_uploaded_file($file['tmp_name'],$path.'/'.$fullname)){
			//成功
			return $fullname;
		}else{
			//移动失败
			return false;
		}
	}
	
	//提供数据
	$file = $_FILES['file'];
	$path = 'uploads';
	$allow_format = array('jpeg','jpg','png');
	$allow_type=array('image/jpeg','image/jpg','image/png');
	$max_size = 8000000;
	
	if($filename = upload_single($file, $allow_type, $path, $error, $allow_format, $max_size)){
		echo $filename;
	}else{
		echo $error;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	