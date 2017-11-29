<?php
$arr1=array('a','b','c','username'=>'king');
$arr2=array(12=>'d',55=>'e',-14=>'f','username'=>'queen');
$arr3=array("test1"=>'111',"test2"=>'222',"test3"=>'3333');
$newArr=$arr1+$arr2+$arr3;
print_r($newArr);
echo '<hr/>';
$arr1=array(3=>1,0=>1,1=>0);
$arr2=array(true,false,'3'=>true);
var_dump($arr1==$arr2,$arr1===$arr2,$arr1!=$arr2,$arr1<>$arr2,$arr1!==$arr2);
