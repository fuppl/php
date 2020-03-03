<?php
	//for循环遍历数组
	
	//数组特点：索引数组，索引规律
	$arr = array(1,2,3,4);
	for($i = 0,$len = count($arr); $i < $len; $i++){
		echo $arr[$i],'<br>';
	}