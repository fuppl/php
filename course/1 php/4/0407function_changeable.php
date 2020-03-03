<?php
	//可变函数
	function display(){
		echo 'hello world';
	}
	
	$a = 'display';
	//$a();
	
	//定义系统函数（假设）
	function sys_function($arg1, $arg2){
		//给指定的函数（第一个参数），求第二个参数的四次方
		return $arg1($arg2);
	}
	
	//定义一个用户函数，求一个数的四次方
	function user_function($num){
		return $num * $num * $num * $num;
	}
	
	echo sys_function('user_function',10);