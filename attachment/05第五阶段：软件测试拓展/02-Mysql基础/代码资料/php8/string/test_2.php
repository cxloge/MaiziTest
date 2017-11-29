<?php
echo ceil(1.2);
echo '<hr/>';
echo floor(2.9);
echo '<hr/>';
echo date("Y/m/d H:i:s",mktime(0,0,0,12,7,2014));
echo '<hr/>';
echo date("Y/m/d H:i:s",mktime(0,0,0,12,7));
echo '<hr/>';
echo date("Y/m/d H:i:s",mktime(0,0,0,12));
echo '<hr/>';
echo date("Y/m/d H:i:s",mktime(0,0,0));
$arr=array('username'=>'king','age'=>12);
print_r(array_flip($arr));
echo '<hr/>';
echo array_sum(range(1,100));
$arr=array('a','b','c');
array_push($arr,'d');
print_r($arr);
array_pop($arr);
print_r($arr);
echo '<hr/>';

$arr=array(12,44,623,-123);
sort($arr);
print_r($arr);
echo '<hr/>';
$arr1=array('a','b','c','username'=>'king');
$arr2=array('d','e','f','username'=>'queen');
print_r(array_merge($arr1,$arr2));





