<?php
header('content-type:text/html;charset=utf-8');
//通过define函数定义常量
define('MAIZI','最大的IT在线教育平台');
define('USERNAME','king');
define('__TEST__','THIS IS A TEST');
define('AGE',12);
define('SALARY',1234.56);
define('MARRIED',true);
echo MAIZI;
echo '<hr/>';
echo username;
echo '<hr/>';
echo USERNAME;
echo '<hr/>';

define('SALARY',9999.99);
echo SALARY;
echo '<hr/>';
//通过constant函数得到常量的值
echo constant('__TEST__');
echo '<hr/>';
//通过defined函数检测常量名称是否被定义
var_dump(defined('__TEST__'),defined('AAA'));
echo '<hr/>';
$name='AAA';
$value='123123123';
if(!defined($name)){
	//定义常量
	echo '常量被定义<br/>';
	define($name,$value);
	//echo $name;
	echo constant($name);
}else{
	echo constant($name);
}

echo '<hr/>';
//使常量名称不区分大小写，给第三个参数为true
define('EDU','麦子学院',true);
echo edu;

echo '<hr/>';
//通过const 定义常量
const ROOT='this is ROOT';
echo ROOT;
echo '<hr/>';
echo constant('ROOT');
echo '<hr/>';
echo root;
echo '<hr/>';
//得到所有已定义的常量,返回的是关联数组
print_r(get_defined_constants());



















