<?php

	//函数参数
	function add($arg1, $arg2){//形参
		return $arg1 + $arg2;
	}
	
	echo add(1,1),'<br>';
	
	//参数的默认值
	function subtract($arg1 = 0,$arg2 = 0){
		return $arg1 - $arg2;
	}
	
	//调用的函数如果存在默认值,可不用传
	//echo subtract(),'<br>';
	
	//引用传值
	function display($a,&$b){
		//修改值本身
		$a *= $a;
		$b *= $b;
		
		echo $a,',',$b,'<br>';
	}
	
	//调用 
	$a = 10;
	$b = 5;
	display($a,$b);
	
	echo $a,',',$b,'<br>';