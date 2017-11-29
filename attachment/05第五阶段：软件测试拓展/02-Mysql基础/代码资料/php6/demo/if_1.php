<?php
header('content-type:text/html;charset=utf-8');
//if的第一种形式
if(false)
	echo 'this is a test<br/>';
echo 'continue...';

//if的第二种形式
if(true){
// 	echo 'this is a test';
// 	echo '<br/>';
// 	echo 'welcome to Maizi Edu to Study PHP';
}
echo '<hr/>';
//if...else
/*
 if(exp){
 	执行exp为真的代码段;
 }else{
 	执行exp为假的代码段;
 }
 */
if(1===true){
	echo 'this is true';
	echo '<hr/>';
}else{
	echo 'this is false';
}

echo '<hr color="red"/>';
/*
 if...elseif
 if... else if
 if(exp1){
 	执行exp1为真的代码段：
 }elseif(exp2){
 	执行exp2为真的代码段;
 }...
 else{
 	以上表达式都不满足会执行到else语句
 }
 */
if(3>11){
	echo '1111111';
}elseif(3>2){
	echo '22222';
}elseif(3>3){
	echo '3333';
}
echo '<hr/>';
$username='queen1';
if($username=='king'){
	echo 'hello king';
}else if($username=='admin'){
	echo 'hello admin';
}else if($username=='queen'){
	echo 'hello queen<br/>';
}elseif($username=='rose'){
	echo 'hello rose';
}
echo 'continue...';
echo '<hr/>';
$day=11;
if($day==1){
	echo '星期一';
}elseif($day==2){
	echo '星期二';
}elseif($day==3){
	echo '星期三';
}elseif($day==4){
	echo '星期四';
}elseif($day==5){
	echo '星期五';
}elseif($day==6){
	echo '星期六';
}elseif($day==0){
	echo '星期日';
}else{
	echo '非法星期';
}














