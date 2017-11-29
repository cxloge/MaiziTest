<?php
/*
 isset($var):检测变量是否被设置，只要变量有值，并且值不为空，isset返回true，否则返回
 false
 
 empty($var):检测变量是否为空，也就是转换成布尔类型false那些情况，如果为空返回true
 否则返回false
 */
$var=1;
$var=0;
$var='';
$var=null;
var_dump(isset($var));
echo '<hr/>';
$var=0;
$var=0.0;
$var='';
$var='0';
$var=false;
$var=null;
$var=array();
var_dump(empty($var));








