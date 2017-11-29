<?php
$string=' abc ';
echo '!'.$string.'!';
echo '<hr/>';
/*
 trim($string[,$charList]):默认去掉字符串两端的空格，也可以去掉指定字符串
 ltrim($string[,$charList]):
 rtrim($string[,$charList]):
 */
echo '!'.trim($string).'!';
echo '<hr/>';
$string='abcdbca';
echo trim($string,'ba');
echo '<hr/>';
echo ltrim($string,'a');
echo '<hr/>';
echo rtrim($string,'a');