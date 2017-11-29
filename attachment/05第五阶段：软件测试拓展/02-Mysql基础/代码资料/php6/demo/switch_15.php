<?php
header('content-type:text/html;charset=utf-8');
/*
 switch(exp){
 	case 值1:
 		代码段;
 		break;
 	case 值2:
 		代码段;
 		break;
 	...
 	default:
 		代码段;
 		break;
 }
 */

$i=21;
switch($i){
	case 1:
		echo 'a<br/>';
		break;
	case 2:
		echo 'b<br/>';
		break;
	case 3:
		echo 'c<br/>';
		break;
	case 4:
		echo 'd<br/>';
		break;
	default:
		echo '以上case都没有匹配到的时候执行的代码段';
		break;
}
echo '<hr/>';

$i=21;
switch($i){
	case 1:
		echo 'a<br/>';
	case 2:
		echo 'b<br/>';
	default:
		echo '以上case都没有匹配到的时候执行的代码段<br/>';
	case 3:
		echo 'c<br/>';
	case 4:
		echo 'd<br/>';
	
}

echo '<hr/>';
$act='login';
switch($act){
	case 'login': echo '完成登陆的功能';break;
	case 'reg': echo '完成注册的功能'; break;
	case 'insert': echo '完成插入的功能'; break;
	default: echo '非法操作';break;
}

echo '<hr/>';
$i=1;
switch($i){
	case true:
		echo '1111';
		break;
	case 1:
		echo '2222222';
		break;
}
echo '<hr/>';
$i=1;
switch($i){
	case 1:
	case 2:
	case 3:
		echo 'this is a test';
		break;
	case 'login':
	case 'reg':
	case 'test':
		echo 'hello world';
		break;
}

echo '<hr/>';
$i=1;
$j='b';
switch($i){
	case 1:
		echo 'aaa<br/>';
		switch ($j){
			case 'a':
				echo 'this is a <br/>';
				break 2;
			case 'b':
				echo 'this is b<br/>';
				break 2;
		}
	case 2:
		echo 'bbb<br/>';
		break;
}








