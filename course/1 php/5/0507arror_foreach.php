<?php
	//定义数组
	$arr = array(1,2,3,4);
	
	foreach($arr as $a){
		echo $a,'<br>';
	}
	
		foreach($arr as $k => $v){
		echo 'key: ',$k,'== ',$v,'<br>';
	}