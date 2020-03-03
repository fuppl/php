<?php

	//递归遍历文件夹，文件夹蓝色，文件红色
	
	$dir = '1 php';
	
	/*
	 *@param1 string $dir，指定目录
	 *@param2 int $level default 0 ，层级
	*/
	
	function my_scandir($dir, $level = 0){
		//1 保证文件安全，如果不是路径没有必要进行
		if(!is_dir($dir))
			dir('<p style=\"color:red\">'.$dir.'</p>');
		$files = scandir($dir);
		foreach($files as $file){
			echo '<div style=\"color:red\">';
			echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$level). $file.'</div>';
			
			//排除 . 和 ..
			if($file == '.' || $file == '..')
				continue;
			
			//构造路径
			$file_dir = $dir .'/'. $file;
			if(is_dir($file_dir)){
				my_scandir($file_dir, $level+1);
			}
		}
	}
	
	my_scandir($dir);