<?php

	//session使用
	//var_dump($_SESSION);//必须先开启session
	
	//开启session
	session_start();
	//var_dump($_SESSION);
	
	$_SESSION['name'] = 'mark';
	$_SESSION['hobby'] = array('basketball','socket');
	
	var_dump($_SESSION['hobby']);