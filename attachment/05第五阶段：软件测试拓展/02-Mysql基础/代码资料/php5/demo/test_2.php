<?php
//字符连接符,.
echo 'hello','world';
echo '<hr/>';
echo 'hello'.'world';
echo '<hr/>';
$str='hello'.'world';
echo $str;
echo '<hr/>';
$str1='hello';
$str2='world';
$str=$str1.$str2.'!'.'<br/>'.$str1.$str2;
echo $str;
echo '<hr/>';

//mt_rand($min,$max):产生一个更好的随机数
echo mt_rand(1,10);
echo '<hr/>';
echo mt_rand(1000,9999);
echo '<hr/>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';











