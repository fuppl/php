<?php
	//简单数据类型：整型，浮点型，布尔型
	
	//定义4种数据类型
	$a1 = 110;
	$a2 = 0b110;
	$a3 = 0110;
	$a4 = 0x110;
	
	echo $a1,'~',$a2,'~',$a3,'~',$a4,'<br>';
	
	//利用进制函数计算
	var_dump(decbin(10));
	
	//浮点型
	echo '<hr>';
	
	$f1 = 1.23;
	$f2 = 1.23e10;
	$f3 = PHP_INT_MAX + 1;
	
	var_dump($f1,$f2,$f3);
	
	//布尔型
	echo '<br>';
	
	$b1 = true;
	$b2 = false;
	
	var_dump($b1,$b2);