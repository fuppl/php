<?php

	//php通过header设置响应头
	
	//content-type设置
	//header('Content-type:text/html;charset=utf-8');
	//echo '你好中国';
	
	//location 立即重定向
	//header('Location:index.html');
	
	//refresh 延时重定向
	//header('Refresh:3;url=index.html');
	//echo 'hello world';
	
	//content-disposition 告知浏览器激活下载对话框
	header('Content-disposition:attachment;filename=girl.jpg');
	