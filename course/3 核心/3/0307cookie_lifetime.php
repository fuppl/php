<?php

	//cookie生命周期
	setcookie('a1','a1');//普通cookie，浏览器关闭失效
	setcookie('a2','a2',time()+7*24*60*60);//当前时间再过七天失效
	
	//0生命周期，与普通周期相同
	setcookie('a4','a4',0);
	
	//"删除"cookie
	//setcookie('a1','');	//清空内容
	setcookie('a1','a1',time());//使其到期
	