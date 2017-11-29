<?php
function test($i){
	$i=123;
	echo $i;
}
test(1);
echo '<hr/>';
$m=2;
test($m);
echo '<hr/>';
echo $m;
echo '<hr/>';

function test1(&$i){
	$i=123;
}
$n=1;
test1($n);
echo $n;
echo '<hr/>';
/*
Fatal error: Only variables can be passed by reference in G:\maizi\maiziedu\php8\string\func_7.php on line 21
 */
// test1(2);
echo '<hr/>';

//变量函数
$funcName='md5';
echo $funcName('admin');
echo '<hr/>';
echo md5('admin');
echo '<hr/>';
function test3(){
	echo 'this is a test';
}
$funcName='test3';
$funcName();
























