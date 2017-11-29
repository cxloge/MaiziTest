<?php
$var=123;
var_dump($var);
echo '<hr/>';
echo gettype($var);
echo '<hr/>';
echo gettype($aserbse);
//设置变量的类型
echo '<hr/>';
$var=1;
settype($var,'float');
var_dump($var);
settype($var,'string');
var_dump($var);
/*
 type  的可能值为： 
1. “boolean” （或为“bool”，从 PHP 4.2.0 起）  
2. “integer” （或为“int”，从 PHP 4.2.0 起）  
3. “float” （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的“double”现已停用）  
4. "string"  
5.  "array"  
6.  "object"  
7. “null” （从 PHP 4.2.0 起） 
Warning: settype(): Invalid type in G:\maizi\maiziedu\php3\demo\test_9.php on line 26
 */

settype($var,'king');
var_dump($var);
echo '<hr color="red"/>';
//检测变量是否为整型
$var=1;
var_dump(is_int($var),is_integer($var),is_long($var));
echo '<hr/>';
//检测变量是否为浮点类型
$var=1.2;
var_dump(is_float($var),is_double($var),is_real($var));
echo '<hr/>';
//检测是否是字符串类型
$var='king';
var_dump(is_string($var));
echo '<hr/>';
//检测是否是布尔类型
$var=false;
var_dump(is_bool($var));
echo '<hr/>';
//检测是否是标量
$var=123;
var_dump(is_scalar($var));
echo '<hr/>';
//检测是否是数组
$var=array();
var_dump(is_array($var));
echo '<hr/>';
//检测是否是资源
$var=fopen('test_9.php','r');
var_dump(is_resource($var));
echo '<hr/>';
//检查是否是对象
$var=new stdClass();
var_dump(is_object($var));
echo '<hr/>';
//检测是否为NULL
$var=null;
var_dump(is_null($var));

//检测是否为数值型，或者字符串的数值
$var=1;
$var='1.1';
$var='3king';
var_dump(is_numeric($var));
echo '<hr color="red"/>';
const USERNAME='king';
echo USERNAME;
define('USERNAME','test');
echo USERNAME;












