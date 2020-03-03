<?php

	//cookie跨子域访问（默认不允许）
	var_dump($_COOKIE);
	setcookie('local','local',0,'/');