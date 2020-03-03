<?php
	//静态变量，可实现跨函数共享变量
	
	//定义函数
	function display(){
		//定义变量
		$local = 1;		//局部变量
		
		//定义静态变量
		static $count = 1;		//静态变量
		
		echo $local++,',',$count++,'<br>';
		
	}
	
	display();
	display();
	display();