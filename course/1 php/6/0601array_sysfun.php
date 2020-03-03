<?php
	//数组系统函数
	$arr = array(3,1,5,2,0);
	//排序函数
	echo '<pre>';
	//sort($arr);
	//asort($arr);
	//krsort($arr);
	
	//shuffle($arr);
	//print_r($arr);
	
	//其他函数
	//模拟数据结构，栈和队列
	//栈：先array_pusi,后array_pop,或先array_unshift,后array_shift;
	$arr = array();
	array_push($arr,3);
	array_push($arr,2);
	array_push($arr,1);
	
	print_r($arr);
	
	echo array_pop($arr),',',array_pop($arr),',',array_pop($arr);
	
	//队列，先 array_push,后array_shift或先array_unshift后array_pop;
	
	
	