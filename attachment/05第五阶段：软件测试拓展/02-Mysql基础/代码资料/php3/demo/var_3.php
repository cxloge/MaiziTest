<?php
header('content-type:text/html;charset=utf-8');
//声明一个整型
$int=1;
echo $int,'<br/>';
$int=-12;
echo $int,'<br/>';
$int=0x123;//八进制
echo $int,'<br/>';
$int=0xffff;//十六进制
echo $int,'<br/>';
//如何得到变量的类型
$int=0;
var_dump($int);//int(0) 
echo '<hr/>';
//浮点类型
$float=1.2;
var_dump($float);
$float=2e3;
$float1=3e-2;
$float2=3E3;
var_dump($float,$float1,$float2);
//布尔类型
$bool=true;
$bool1=false;
$bool2=TRUE;
$bool3=FALSE;
var_dump($bool,$bool1,$bool2,$bool3);
echo '<hr/>';
//字符串
//中文在UTF-8，一个中文占3个长度
$string='麦子学院';//string(12) "麦子学院" 
var_dump($string);
echo '<hr/>';
/*
 Parse(解析错误) error: syntax error(语法错误), unexpected end of file in 
 G:\maizi\maiziedu\php3\demo\var_3.php on line 43
 */
$string="maizi";
var_dump($string);
echo '<hr/>';
//数组
$array=array();
var_dump($array);
echo '<hr/>';
//对象
$object=new stdClass();
var_dump($object);

echo '<hr/>';
$handle=fopen('test_2.php','r');
var_dump($handle);

echo '<hr/>';

//空
var_dump($king);

$null=null;
var_dump($null);

$test=123;
unset($test);
var_dump($test);











