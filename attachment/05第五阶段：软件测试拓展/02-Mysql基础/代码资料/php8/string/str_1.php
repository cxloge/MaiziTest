<?php
header('content-type:text/html;charset=utf-8');
$string='king';
//UTF-8下一个中文3个长度
//GBK下一个中文2个长度
$string='麦子';
echo strlen($string);
echo '<hr/>';
$string='abcDeF';
echo strtoupper($string);
echo '<hr/>';
echo strtolower($string);
echo '<hr/>';
$string='This is a test';
echo ucwords($string);
echo '<hr/>';
echo ucfirst($string);
echo '<hr/>';
echo lcfirst($string);
echo '<hr/>';
$string='abcdef';
echo substr_replace($string, '!', 3);
echo '<hr/>';
echo substr_replace($string, '^-^', 3,1);
echo '<hr/>';
echo substr_replace($string, '', 3,1);
echo '<hr/>';
$string=<<<EOF
King&Soniya,
"He Said I'm Fine";
Tom\Smith
EOF;
echo $string;
echo '<hr/>';
echo addslashes($string);
echo '<hr/>';

$string=<<<EOF
A>B,
C<D,
King&Soniya,
"He Said I'm Fine";
Tom\Smith
EOF;
echo htmlentities($string,ENT_QUOTES);
echo '<hr/>';
$string="ab\ncd";
echo $string;
echo '<hr/>';
echo nl2br($string);
echo '<hr/>';
$str1='71.gif';
$str2='75.gif';
echo strnatcasecmp($str1, $str2);
echo '<hr/>';
echo strncasecmp($str1, $str2, 2);
echo '<hr/>';
$string='a b c d e f';
print_r(explode(' ',$string));
echo '<hr/>';
$string='啊,的,个,看,了,为,任,课,教,师,的,分,类,考,试,京,东,方';
print_r(explode(',',$string));
$arr=array('a','b','c','d');
echo '<hr/>';
echo join('^_^',$arr);
echo '<hr/>';
$string='helloworld';
$arr=str_split($string,2);
print_r($arr);
echo '<hr/>';
$num  =  5 ;
$location  =  'tree' ;
$format  =  'There are %d monkeys in the %s' ;
echo  sprintf ( $format ,  $num ,  $location );
echo '<hr/>';
printf($format,$num,$location);
echo '<hr/>';
$string='abcdef';
echo strrev($string);
echo '<hr/>';
$string='a,b,c,d';
$arr=str_getcsv($string);
print_r($arr);
echo '<hr/>';












