<?php

	//删除session
	session_start();
	var_dump($_SESSION);
	
	//删除session
	unset($_SESSION['name']);
	
	//删除全部session
	$_SESSION = array();