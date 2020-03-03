<?php
	//引入初始文件
	include_once '0203database.php';
	
	//新建数据
	//组织sql指令
	$pub_time = time();
	$sql = "insert into n_news values(null, '标题', 1, '内容', '发布者', {$pub_time})";
	
	//更新
	//$sql = "update n_news set content = '阿拉蕾' where id = 1;";
	
	//删除
	//$sql = "delete from n_news where id = 1;";
	
	
	//执行sql指令
	if(mysql_query($sql)){
		//操作成功
		echo '成功';
	}else{
		//失败
		echo '失败';
	}