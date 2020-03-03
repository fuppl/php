<?php
	//自定义错误处理函数，可以代替系统默认的
	function my_error($errno, $errstr, $errfile){
		//判断当前会碰到的错误有哪些
		if(!(error_reporting() & $errno))	//error_reporting没有参数代表获取当前系统处理问题的级别是所有问题,这句话表示当前错误不在体系之中，所以无法处理
			return false;
		//判断错误类型
		switch($errno){
			case E_ERROR:
			case E_USER_ERROR:
				echo 'lalala error'.$errfile;break;
			case E_WARNING:
			case E_USER_WARNING:
				echo 'lalala warning'.$errfile;break;
			case E_NOTICE:
			case E_USER_NOTICE:
				echo 'lalala notice'.$errfile;break;
		}
		return true;
	}
	
	echo $a;
	
	//注册到系统中，修改错误机制
	set_error_handler('my_error');
	
	echo $a;
