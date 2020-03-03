<?php
	//连接运算符
	$a = 123;
	$b = 'hello';
	
	echo $a . $b,'<br>';	// . 表示将a与b连接起来
	
	$a .= $b;	// $a.=$b 相当于 $a = $a.$b; 
	echo $a,'<br>';
	
	//错误抑制符 @ 
	echo '<hr>';
	
	$a = 10;
	$b = 0;
	
	@($a / $b);
	
	//三目运算符
	echo '<hr>';
	
	$a = 10;
	
	$b = $a > 10 ? 100 : 0;
	echo $b,'<br>';