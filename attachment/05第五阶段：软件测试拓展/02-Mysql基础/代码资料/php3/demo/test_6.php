<?php
//其它类型转换成数值型
echo 1+true;//true->1
echo '<hr/>';
echo 1+FALSE;//false->0
echo '<hr/>';
echo 1.2+true;//2.2
echo '<hr/>';
echo 1+null;//null->0
echo '<hr/>';
echo 1+'a';//不是以合法数字开始直接转换成0
echo '<hr/>';
echo 1+'true';
echo '<hr/>';
echo 1+'123king';
echo '<hr/>';
echo 1+'3qu2e1nn4';
echo '<hr/>';
echo 1+'3.2abc';
echo '<hr/>';
echo 1+'3e2abc';
echo '<hr/>';
echo 1+'-1acd';
echo '<hr color="red"/>';
//其它类型转换成字符串型
echo 123;
echo '<hr/>';
echo 12.3;
echo '<hr/>';
echo true;
echo '<hr/>';
echo 'a',false,'b';
echo '<hr/>';
echo 'A',null,'B';
echo '<hr/>';
$array=array();
echo $array;
echo '<hr/>';
$handle=fopen('string_5.php','r');
echo $handle;
echo '<hr/>';
/*
 Catchable fatal error(致命错误): Object of class stdClass could not be converted to string in G:\maizi\maiziedu\php3\demo\test_6.php on line 43
 */
// $object=new stdClass();
// echo $object;











