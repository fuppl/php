<?php
	//系统函数
	
	//输出相关
	echo print('hello world<br>');//换行后会输出“1”,表示echo print是个表达式，是有返回值的；
	print 'hello world<br>';
	
	$a = 'hello world<br>';
	print_r($a);
	
	echo '<hr>';
	
	//时间函数
	echo date('Y 年 m 月 d 日'),'<br>';
	echo time(),'<br>';
	echo microtime(),'<br>';