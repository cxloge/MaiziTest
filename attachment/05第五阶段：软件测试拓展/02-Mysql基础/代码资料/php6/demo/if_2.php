<?php
header('content-type:text/html;charset=utf-8');
$username='king1';
$sex='女';
$age=50;
if($username=='king'){
	$var=12;
	$salary=123.456;
	if($sex=='男'){
		if($age<18){
			echo '你好,king童鞋';
			
		}else{
			echo '你好,king先生';
		}
	}else{
		if($age<30){
			echo '您好,king小姐';
		}else{
			echo '您好，king夫人';
			if($addr=='北京'){
				echo '首都人民';
			}else{
				echo '全国人民';
			}
		}
	}
}else{
	echo 'this is a test';
}


