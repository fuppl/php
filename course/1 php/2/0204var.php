<?php 
	//变量
	
	//定义变量
	$var1;//定义
	$var2 = 1;//赋值
	
	//访问变量
	echo $var2;
	
	//修改变量
	$var2 = 2;
	echo '<br>',$var2;
	
	//删除变量
	unset($var2);
	echo $var2;
	
	//变量命名规则
	$var_3;$_var4;//正确
	//$1var;//错误，不能以数字开头
?>