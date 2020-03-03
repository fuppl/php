<?php
	//定义字符串
	
	//引号定义
	$s1 = 'string1';
	$s2 = "string2";
	
	echo $s1,',',$s2,'<br>';
	
	//结构化定义
	//heredocs
	$s3 = <<<EOD
		hello
EOD;
		
	//nowdocs	
	$s4 = <<<'EOD'
		hello
EOD;
	
	var_dump($s3,$s4);
	
	$s5 = <<<EOD
		<script>
			alert('$s1');
		</script>
EOD;
	
	echo $s5;