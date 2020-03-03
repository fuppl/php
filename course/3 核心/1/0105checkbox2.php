<?php

	//将复选框内容存储到数据库，因为数组无法存储到数据库，所以必须将数组以指定格式合并成字符串
	header('Content-type:text/html;charset=UTF-8');
	//判断是否有该值
	$hobby = isset($_POST['hobby']) ? $_POST['hobby'] : array();
	print_r($hobby);
	echo '<br>';
	
	//将数组合并成字符串
	$hobby_string = implode(',',$hobby);
	print_r($hobby_string);
	echo '<br>';
	
	//将设hobby_string是从数据库取出的字符串，将其分解成数组
	var_dump(explode(',',$hobby_string));
	echo '<br>';
	print_r(explode(',',$hobby_string));
	