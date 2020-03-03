<?php
	//常量
	
	//使用函数定义常量,define
	define('CONST1',1);
	
	//使用const
	const CONST2 = 2;
	
	//定义特殊常量，只能用define
	define('-_-','smile');
	
	//使用常量
	echo CONST1,',',CONST2,'<br>';
	
	//使用特殊常量
	echo constant('-_-');
	
	//系统常量
	echo '<hr>',PHP_VERSION,'<br>',PHP_INT_SIZE,'<br>',PHP_INT_MAX;
	
	//魔术常量
	echo '<br>',__DIR__,'<br>',__FILE__,'<br>',__LINE__,'<br>';
	
	echo __LINE__;
	
	