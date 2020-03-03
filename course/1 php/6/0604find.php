<?php
	//查找
	//二分法
	$arr = array(0,1,2,3,4,5,6);
	
	function erfen($arr,$m,$left,$right){
		$mid = floor($left + $right)/2;
		if($left > $right)
			return -1;
		$midValue = $arr[$mid];
		if($midValue == $m)
			return $midValue;
		elseif($midValue > $m){
			return erfen($arr,$m,$left,$mid-1);
		}
		else{
			return erfen($arr,$m,$mid+1,$right);
		}
	}
	
	echo '<pre>';
	print_r(erfen($arr,7,0,count($arr)));