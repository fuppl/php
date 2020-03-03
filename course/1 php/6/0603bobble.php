<?php
	//排序算法
	$arr = array(5,4,3,2,1,0);
	
	//冒泡
	function bobble($arr){
		for($i = 0, $des = count($arr); $i < $des; $i++){
			for($j = 0;$j < $i; $j++){
				if($arr[$j] > $arr[$j+1]){
					$temp = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
		}
		return $arr;
	}
	//选择排序
	function choose($arr){
		for($len = count($arr),$i = 0; $i < $len; $i++){
			$min = $i;
			for($j = $i+1; $j < $len;$j++){
				if($arr[$j]<$arr[$min])
					$min = $j;
			}
			if($min != $i){
				$temp = $arr[$i];
				$arr[$i] = $arr[$min];
				$arr[$min] = $temp;
			}
		}
		return $arr;
	}
	
	//插入排序
	function insert($arr){
		for($i = 1, $len = count($arr);$i < $len; $i++){
			$temp = $arr[$i];
			for($j = $i-1; $j >= 0;$j--){
				if($arr[$j] > $temp){
					$arr[$j+1] =$arr[$j];
					$arr[$j] = $temp;					
				}
				else
					break;
			}
		}
		return $arr;
	}

	//快速排序
	function quick($arr){
		$len = count($arr);
		if($len <= 1)
			return $arr;
		$left = $right = array();
		for($i=1;$i<$len;$i++){
			if($arr[$i] < $arr[0]){
				$left[] = $arr[$i];
			}else{
				$right[] = $arr[$i];
			}
		}
		$left = quick($left);
		$right = quick($right);
		
		return array_merge($left,(array)$arr[0],$right);
	}
	
	echo '<pre>';
	//print_r(choose($arr));
	//print_r(insert($arr));
	print_r(quick($arr));
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	