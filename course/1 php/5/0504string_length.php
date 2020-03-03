<?php

	//字符串长度
	header('Content-type:text/html;charset=utf8');
	
	$s1 = 'abcdefghilkl';
	$s2 = '你好世界123';
	
	echo $s1,',',$s2,'<br>';
	echo strlen($s1),',',strlen($s2),'<br>';
	
	//使用mbstring
	echo '<hr>';
	echo mb_strlen($s1),',',mb_strlen($s2),',',mb_strlen($s2,'utf-8');
	