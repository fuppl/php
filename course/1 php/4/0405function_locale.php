<?php
	//php中的作用域
	
	//默认的代码空间
	$global = 'global area'; 	//最终会被系统纳入到超全局变量中：$GLOBALS['global'=global area];
	
	//局部变量,必须在函数内部
	function display(){
		//所有的形参都可以理解为局部变量
		$inner = __FUNCTION__;		//局部变量
		
		//echo $global;		不能访问
		//echo $GLOBALS['global'];		//可以访问
		
		//定义变量：使用全局变量
		global $global;
		echo $global;
	}
	display();
	