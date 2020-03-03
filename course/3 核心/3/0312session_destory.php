<?php

	//销毁session
	session_start();
	var_dump($_SESSION);
	
	sleep(5);
	
	session_destroy();