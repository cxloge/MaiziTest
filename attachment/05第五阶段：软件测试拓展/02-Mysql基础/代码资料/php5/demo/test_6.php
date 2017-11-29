<?php
//执行运算符的例子
echo `ipconfig`;
echo '<hr/>';
echo shell_exec('ipconfig');
echo '<hr/>';
//错误抑制符
$var=1;
@settype($var,'king');
echo '<hr/>';
echo @(3/0);