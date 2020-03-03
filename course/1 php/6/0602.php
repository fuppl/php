<?php

	//斐波那契数列
	$arr = array(1,1);
	
	for($i = 2;$i < 15; $i++){
		$arr[$i] = $arr[$i-1] + $arr[$i-2];
	}
	
	foreach($arr as $a){
		echo $a,'<br>';
	}
	
	//递归思想
	function recursion($n){
		if($n == 1 || $n == 2)
			return 1;
		return recursion($n - 1)+recursion($n - 2);
	}
	
	echo recursion(15);