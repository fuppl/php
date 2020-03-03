<?php
	//处理上传的文件

	header('Content-type:text/html;charset=UTF-8');

	//echo '<pre>';
	
	//var_dump($_POST);
	//var_dump($_FILES);
	
	//1 取得文件信息
	$file = $_FILES['file'];
	//2 判断是否是上传文件
	if(is_uploaded_file($file['tmp_name'])){
		//时上传文件
		if (move_uploaded_file($file['tmp_name'],'uploads/'.$file['name'])){
			echo '文件保存成功';
		}else{
			echo '文件保存失败';
		}
	}else{
		//不是上传文件
		echo '文件上传错误';
	}