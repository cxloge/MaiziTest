<?php
echo 3+8;
echo '<hr/>';
echo 3-8;
echo '<hr/>';
echo 3*8;
echo '<hr/>';
echo 3/8;
echo '<hr/>';
echo 3%8;//3
echo '<hr/>';
echo 3%-8;//3
echo '<hr/>';
echo -3%8;//-3
echo '<hr/>';
echo -3%-8;//-3
echo '<hr/>';

/*
 $var=1;
 前缀形式：++$var,--$var,先加减1，在执行
 后缀形式：$var++,$var--,先执行，在加减1
 对于数值型支持自增自减运算符
 布尔类型不支持自增自减运算符
 null只支持自增，不支持自减
 字符串只支持自增，不支持自减
 */
$var=1;
echo ++$var;//2
echo '<hr/>';
$var=1;
echo $var++;
echo '<hr/>';
echo $var;
echo '<hr/>';
$var=1;
$var--;
echo $var;
echo '<hr/>';
$var=1.2;
echo ++$var;
echo '<hr/>';
$var=1.2;
echo --$var;
echo '<hr/>';
$var=true;
echo ++$var;
echo '<hr/>';
$var=true;
echo $var++;
echo '<hr/>';
echo $var;
echo '<hr color="red"/>';
$var=null;
echo ++$var;
echo '<hr/>';
$var=null;
echo 'A',--$var,'B';
echo '<hr color="green"/>';
$var='a';
echo ++$var;
echo '<hr/>';
$var='b';
echo --$var;
echo '<hr/>';
$var='A';
echo ++$var;
echo '<hr/>';
$var='z';
echo ++$var;
echo '<hr/>';
$var='a1';
echo ++$var;//a2
echo '<hr/>';
$var='a9';
echo ++$var;//b0
echo '<hr/>';
$var='1z';
echo ++$var;//2a
echo '<hr/>';
$var='9z';
echo ++$var;//10a
echo '<hr/>';

$var=1;
echo ++$var + $var++;
echo '<hr/>';

$var=1;
echo $var++ + ++$var;
echo '<hr/>';

$var=1;
echo $var-- + --$var;
echo '<hr/>';

























