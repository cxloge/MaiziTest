<?php
header('content-type:text/html;charset=utf-8');
echo '<pre>';
$arr=array('a','b','c');
print_r($arr);
echo '<hr/>';
echo $arr[1];
$userInfo['username']='麦子学院';
$userInfo['course']='PHP';
$userInfo['desc']='最大的职业IT教育在线平台';
echo '名称为：'.$userInfo['username'],'<br/>';
echo '所学课程为：'.$userInfo['course'],'<br/>';
echo '简介为：'.$userInfo['desc'],'<br/>';
echo '<hr/>';
$arr=array(
		'a','b','c','d',
		'username'=>'king',
		'age'=>'12'
);
//将b变成bbb
$arr[1]='bbb';
print_r($arr);
echo '<hr/>';
$arr[]='e';
$arr[]='f';
$arr['sex']='male';
print_r($arr);
echo '<hr/>';
unset($arr['age']);
print_r($arr);
unset($arr['sex'],$arr['username']);
print_r($arr);
unset($arr);
var_dump($arr);
$arr=range('a','z');
print_r($arr);










echo '</pre>';