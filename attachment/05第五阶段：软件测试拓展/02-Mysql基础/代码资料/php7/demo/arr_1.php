<?php
header('content-type:text/html;charset=utf-8');
echo '<pre>';
//通过array()形式声明数组
$arr=array();
var_dump($arr);
echo '<hr/>';
echo gettype($arr);
echo '<hr/>';
var_dump(is_array($arr));
echo '<hr/>';
//声明下标连续的索引数组
//数组下标从0开始
$arr=array(1,1.2,true,'king',null);
print_r($arr);
echo '<hr/>';
//手动指定数组下标
$arr=array(
		12=>'aaa',
		15=>'bbb',
		55=>'ccc',
		'66'=>'ddd',
		-12=>'eee'
);
print_r($arr);
echo '<hr/>';
//声明关联数组
$arr=array(
	'username'=>'king',
	'age'=>12,
	'addr'=>'北京',
	'married'=>true	
);
print_r($arr);
//通过混合数组
$arr=array(
	1,2,3,4,5,
	'username'=>'麦子学院',
	'desc'=>'最大IT职业教育在线平台'	
);
print_r($arr);
echo '<hr/>';
$arr=array(1,1,1,1,1,1);
print_r($arr);
echo '<hr/>';
//键名重复产生覆盖
$arr=array('a','b','c',0=>'aaa','0'=>'bbb');
print_r($arr);
echo '<hr/>';
$arr=array(
	'username'=>'king',
	'username'=>'queen'	
);
print_r($arr);
echo '<hr color="red"/>';
$arr=array(
	1=>'a',
	'1'=>'b',
	3.9=>'c',
	true=>'d',
	false=>'e',
	''=>'f',
	null=>'g'
);
print_r($arr);
echo '<hr/>';
$arr=array('a',-3=>'b','c',15=>'d','e','f');
print_r($arr);
$arr=array(-3=>'a',-66=>'b','c');
print_r($arr);





echo '</pre>';









