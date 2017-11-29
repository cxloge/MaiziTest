<?php
/*
 strcmp($str1,$str2):比较两个字符串的大小
 $str1=$str2,返回0
 $str1>$str2,返回1
 $str1<$str2,返回-1
 
 strcasecmp($str1,$str2):忽略大小写的比较两个字符串
 $str1=$str2,返回0
 如果不等返回的是Ascii差
 */
$str1='abc';
$str2='aca';
echo strcmp($str1,$str2);
echo '<hr/>';
$str1='a';
$str2='A';
echo strcmp($str1,$str2);
echo '<hr/>';
echo strcasecmp($str1, $str2);
echo '<hr/>';
echo strcasecmp('a1','d3');






