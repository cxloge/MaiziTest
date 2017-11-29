<?php
//临时转换
$var=12;
var_dump((float)$var,(double)$var,(real)$var,(string)$var,(bool)$var,(boolean)$var);
echo '<hr/>';
var_dump((unset)$var,(array)$var,(object)$var);
echo '<hr/>';
$string='3king';
var_dump((int)$string,(integer)$string);
echo '<hr/>';
$string='';
var_dump((bool)$string);
echo '<hr/>';
//通过函数的形式实现临时转换
$var=true;
echo intval($var);
echo '<hr/>';
echo floatval($var),'<hr/>',doubleval($var);
echo '<hr/>';
echo strval($var);
echo '<hr/>';
var_dump($var);
//$var='false';
/*
 Fatal error: Call to undefined function boolval() in G:\maizi\maiziedu\php3\demo\test_8.php on line 23
 */
//echo boolval($var);











