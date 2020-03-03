<?php

	//数组
	$arr1 = array('1',1,'lalala');
	$arr2 = ['1',1,'lalala'];

	var_dump($arr1);
	var_dump($arr2);
	
	echo '<hr>';
	//隐形数组
	$arr3[] = 1;
	$arr3[10] = 1;
	$arr3[] = '1';
	$arr3["key"] = 123;
	$arr3[] = 'lalala';
	var_dump($arr3);
	
	echo '<hr>';
	
	//特殊下标自动转换
	$arr4[false] = false;
	$arr4[true] = true;
	$arr4[NULL] = NULL;
	var_dump($arr4);
