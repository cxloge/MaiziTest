<?php
function play($something){
	echo "I'm Playing {$something}...<br/>";
}
function study($something){
	echo "I'm Studying {$something}...<br/>";
}
function relax($something){
	echo "I'm Relaxing {$something}...<br/>";
}
function doWhat($doing,$thing){
	$doing($thing);
}
function test(){
	echo 'this is a test<br/>';
}
doWhat('play','ball');
echo '<hr/>';
doWhat('study','php');
echo '<hr/>';
call_user_func('play','game');
echo '<hr/>';
call_user_func('test');
echo '<hr/>';
echo call_user_func('calc',1,2,'+');
echo '<hr/>';
echo call_user_func_array('calc', array(11,2,'*'));
function calc($num1,$num2,$op){
	if($op=='+'){
		$res=$num1+$num2;
	}elseif($op=='-'){
		$res=$num1-$num2;
	}elseif($op=='*'){
		$res=$num1*$num2;
	}elseif($op=='/'){
		$res=$num1/$num2;
	}elseif($op=='%'){
		$res=$num1%$num2;
	}
	return $res;
}










