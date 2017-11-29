<?php
function test(){
	echo 'this is a test';
}

test();
echo '<hr/>';
test();
echo '<hr/>';
TeSt();
echo '<hr/>';
//函数名称不支持重名
/*

Fatal error(致命错误): Cannot redeclare test() (previously declared in G:\maizi\maiziedu\php8\string\func_4.php:3) in G:\maizi\maiziedu\php8\string\func_4.php on line 15

 */
// function test(){
// 	echo 'hello world';
// }
/*
 
Fatal error: Cannot redeclare md5() in G:\maizi\maiziedu\php8\string\func_4.php on line 23
 */
// function md5(){
// 	echo 'md5 string';
// }
//检测函数名称，如果不存在，在定义
//function_exists($funcName)
//var_dump(function_exists('md5'),function_exists('test'),function_exists('terst1'));


if(!function_exists('test1')){
	function test1(){
		echo 'this is a test1';
	}
	
}
test1();
echo '<hr/>';
/*
 
Fatal error: Call to undefined function test2() in G:\maizi\maiziedu\php8\string\func_4.php on line 41
 */
// test2();
function createTable() {
	echo "<table width='60%' border='1' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF'>";
	echo "<tr>";
	echo '<td>x</td>';
	echo '<td>x</td>';
	echo '<td>x</td>';
	echo "</tr>";
	
	echo "<tr>";
	echo '<td>x</td>';
	echo '<td>x</td>';
	echo '<td>x</td>';
	echo "</tr>";
	
	echo "<tr>";
	echo '<td>x</td>';
	echo '<td>x</td>';
	echo '<td>x</td>';
	echo "</tr>";
	echo "</table>";
}
createTable();
echo '<hr/>';
createTable();
echo '<hr/>';
function test3(){
	return md5('admin');
	return 3>1?'aa':'bb';
	return 1==true;
	return 1+2;
	return null;
	return fopen('func_3.php','r');
	return new stdClass();
	return array(1,2,3,4,5,1.2,true,null);
	return 'this is a test';
	return true;
	return 1.2;
	return 1;
	echo 'this is a test3<br/>';
}
var_dump(test3());//NULL




















