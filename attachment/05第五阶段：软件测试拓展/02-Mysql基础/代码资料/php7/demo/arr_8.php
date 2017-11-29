<?php
echo '<pre>';
$arr=array(
	'a',
	12=>'this is a test',
	'username'=>'king',
	'age'=>'12',
	'married'=>false,
	'test'=>'hello world'	
);
/*
 Array
(
    [0] => a
    [12] => this is a test
    [username] => king
    [age] => 12
    [married] => 
)
 */
//print_r($arr);
echo current($arr),'<br/>';
echo key($arr),'<br/>';
echo '<hr/>';
echo next($arr),'<br/>';
echo key($arr).'-'.current($arr),'<br/>';
echo '<hr/>';
echo prev($arr),'<br/>';
echo key($arr).'-'.current($arr),'<br/>';
echo '<hr color="red"/>';
var_dump(prev($arr));//bool(false),没有元素了
echo '<hr/>';
var_dump(end($arr));
echo '<hr/>';
var_dump(next($arr));
echo '<hr/>';
var_dump(key($arr),current($arr));
echo '<hr/>';
echo reset($arr);
echo '<hr color="red"/>';
$arr=array(
		'a',
		12=>'this is a test',
		'username'=>'king',
		'age'=>'12',
		'married'=>false,
		'test'=>'hello world'
);
// while(current($arr)){
// 	echo key($arr),'-',current($arr),'<br/>';
// 	next($arr);
// 	echo '<hr/>';
// }
while(key($arr)!==NULL){
		echo key($arr),'-',current($arr),'<br/>';
		next($arr);
		echo '<hr/>';
}















echo '</pre>';