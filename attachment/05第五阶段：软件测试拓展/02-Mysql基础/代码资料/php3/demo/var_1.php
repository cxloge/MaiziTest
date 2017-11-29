<?php
//通过header函数发送头信息，作用就是以什么编码方式解析什么类型的文档
header('content-type:text/html;charset=utf-8');
//声明一个变量
// $var;
// $test;
// $username;
$username='king';
$age=12;
$salary=3456.78;
$married=true;

echo '用户名为：';
echo $username;
echo '<hr/>';
echo $age;
echo '<hr/>';
echo $salary;
$salary=6666.99;
echo '<hr/>';
echo $salary;
echo '<hr/>';
$a=1;
$A=2;
echo $a;
echo '<hr/>';
echo $A;
echo '<hr/>';
//修改PHP配置文件中的error_reporting = E_ALL&~E_NOTICE，之后重启服务器
//Notice: Undefined variable: maizi in G:\maizi\maiziedu\php3\demo\var_1.php on line 30
echo $maizi;
echo '<hr/>';
//可以写中文，但是不要使用
// $帅哥='king';
// echo $帅哥;

// $i=1;
// $j=1;
// $k=1;
//一次声明多个变量并且赋值相同
$i=$j=$k=$m=$n=1;

echo $i;
echo '<hr/>';
echo $i,$j,$k;




































