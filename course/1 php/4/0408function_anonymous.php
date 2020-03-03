<?php
	//匿名函数
	$a = function (){
		echo 'hello world';
	};
	
	//调用匿名函数,类似可变函数
	//$a();
	
	//定义闭包函数
	function display1(){
		//定义局部变量
		$name = __FUNCTION__;
		
		//定义匿名函数
		$innerFunction = function() use($name) {	//use 就是将外部变量（局部）保留给内部使用（闭包）
			//函数内部的函数
			echo $name;
		};
		
		//调用匿名函数
		//$innerFunction();
		//返回内部匿名函数
		return $innerFunction;
	};
	
	$closure = display1();
	$closure();