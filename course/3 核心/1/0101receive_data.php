<?php

	//接受数据
	echo '<pre>';
	
	var_dump($_GET);	//get方式提交的数据
	echo '<hr>';
	
	var_dump($_POST);	//post方式提交的数据
	echo '<hr>';
	
	var_dump($_REQUEST);	//两种方式提交的数据
	echo '<hr>';