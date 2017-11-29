<?php
header('content-type:text/html;charset=utf-8');
//赋值运算符
$a=1;
$a+=1;//$a=$a+1;
echo $a;
echo '<hr/>';
$a=1;
$a-=1;//$a=$a-1;
echo $a;
echo '<hr/>';
$a=1;
$a*=1;//$a=$a*1;
echo $a;
echo '<hr/>';
$a=1;
$a/=1;//$a=$a/1;
echo $a;
echo '<hr/>';
$a=1;
$a%=1;//$a=$a%1;
echo $a;
echo '<hr/>';

$str1='hello';
$str1.='wolrd';//$str1=$str1.'world'
$str1.='!';
echo $str1;
echo '<hr/>';
$table='<table border="1" width="80%">';
	$table.='<tr>';
		$table.='<td>x</td>';
		$table.='<td>x</td>';
	$table.='</tr>';
$table.='</table>';
echo $table;
echo '<hr/>';
//$code=$code.'4';
$code.= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
$code.= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
$code.= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
$code.= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo $code;
echo '<hr/>';
echo $code;
echo '<hr/>';

$string='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890';
//echo $string{mt_rand(0,25)};
//strlen($string):得到字符串的长度
echo '字符串的长度为：'.strlen($string);
echo '<hr/>';
$verify=$string[mt_rand(0,strlen($string)-1)];
$verify.=$string[mt_rand(0,strlen($string)-1)];
$verify.=$string[mt_rand(0,strlen($string)-1)];
$verify.=$string[mt_rand(0,strlen($string)-1)];
echo $verify;
//做一个每一位颜色不同的数字+字母混合的4位验证码





























