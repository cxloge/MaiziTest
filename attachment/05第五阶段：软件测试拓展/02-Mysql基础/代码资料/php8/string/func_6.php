<?php
header('content-type:text/html;charset=utf-8');
function test(){
	$i=1;
	$j=2;
	echo $i+$j;
}
test();//3
echo '<hr/>';
// echo $i,'-',$j;
var_dump($i,$j);
echo '<hr/>';
function test1(){
	$i=1;
	echo $i,'<br/>';
	$i++;
}
test1();
test1();
test1();
test1();
echo '<hr/>';
function test2(){
	static $i=1;
	echo $i,'<br/>';
	$i++;
}
test2();
test2();
test2();
test2();
echo '<hr/>';
$i=1;
$j=2;

function test3(){
// 	global $i;
// 	global $j;
	global $i,$j;
	echo $i+$j;
}
test3();
echo '<hr/>';
$i=1;
$j=2;
function test4(){
	global $i,$j;
	$i=5;
	$j=6;
}
echo $i,'-',$j;
echo '<hr/>';
test4();
echo $i,'-',$j;
echo '<hr/>';
$i=1;
$j=2;
$m=3;
$n=4;
$username='king';
$sex='男';
//print_r($GLOBALS);
function test5(){
	echo $GLOBALS['i']+$GLOBALS['j'];
}
test5();

























