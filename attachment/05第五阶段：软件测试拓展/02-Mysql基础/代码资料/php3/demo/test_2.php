<?php
//可变变量的例子
$a='b';
$b='c';
$c='d';
echo $$$a;//$$b->$c

echo '<hr/>';

$i=1;
$j=$i;
echo $j;
echo '<br/>';
$j=3;
echo $j,'<br/>';
echo $i;
echo '<hr/>';

$i=1;
//取地址符号
$j=&$i;
echo $j;
echo '<hr/>';
$j=22;
echo $j;
echo '<hr/>';
echo $i;
echo '<hr/>';
//unset($var):注销变量
unset($i);
echo $i;
echo '<hr/>';
echo $j;















