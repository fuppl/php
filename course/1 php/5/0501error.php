<?php
	//php错误处理
	
	//改浏览器编码
	header('Content-type:text/html;charset=utf-8');
	
	$a = 1;
	$b = 0;
	
	if($b == 0){
		//人为出发错误
		trigger_error('除数不能为0');
	}
	
	echo $a / $b;
	