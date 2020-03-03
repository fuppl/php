<?php
	header('Content-type:text/html;charset=UTF-8');
	echo '<pre>';
	//多文件上传
	
	//print_r($_FILES);
	
	/*//不同名文件遍历处理方式
	foreach($_FILES as $f){
		//$f 就是一个完整的文件上传信息
		if(is_uploaded_file($f['tmp_name'])){
			move_uploaded_file($f['tmp_name'],'uploads/'.$f['name']);
		}
	}*/
	
	//同名文件遍历处理方式，需要先从数组中把个部分（name, tmp_name, size, error, type）取出，在拼凑出一个个小的分组
	
	//判断元素存在且时数组（name 存在且为多个）
	if(isset($_FILES['file']['name']) && is_array($_FILES['file']['name'])){
		//遍历构造数组元素
		$files = array();
		foreach($_FILES['file']['name'] as $k => $file){
			$array = array(
				'name' => $file,
				'tmp_name' => $_FILES['file']['tmp_name'][$k],
				'size' => $_FILES['file']['size'][$k],
				'error' => $_FILES['file']['error'][$k],
				'type' => $_FILES['file']['type'][$k]
			);
			$files[]=$array;
		}
		
	}
	print_r($files);