<?php
header('content-type:text/html;charset=utf-8');
echo '<pre>';
//首先定义二维索引+关联
$userInfo[]=array('id'=>1,'username'=>'king1','age'=>12,'course'=>'php');
$userInfo[]=array('id'=>2,'username'=>'king2','age'=>22,'course'=>'java');
$userInfo[]=array('id'=>3,'username'=>'king3','age'=>32,'course'=>'ios');
$userInfo[]=array('id'=>4,'username'=>'king4','age'=>42,'course'=>'swift');
$userInfo[]=array('id'=>5,'username'=>'king5','age'=>52,'course'=>'android');
$userInfo[]=array('id'=>6,'username'=>'king6','age'=>62,'course'=>'c++');
//print_r($userInfo);
// foreach($userInfo as $key=>$val){
// 	//echo $key,'-',$val,'<br/>';
// 	echo $key,'<br/>';
// 	foreach($val as $v){
// 		echo $v,'<br/>';
// 	}
// 	echo '<hr/>';
// }
foreach($userInfo as $key=>$val){
	echo $key,'<br/>';
	echo 'id:'.$val['id'],'<br/>';
	echo 'username:'.$val['username'],'<br/>';
	echo '<hr/>';
}
echo '<hr/>';
foreach($userInfo as $val){
	print_r($val);
	echo '<hr/>';
}
/*
 Array
(
    [0] => Array
        (
            [id] => 1
            [username] => king1
            [age] => 12
            [course] => php
        )

    [1] => Array
        (
            [id] => 2
            [username] => king2
            [age] => 22
            [course] => java
        )

    [2] => Array
        (
            [id] => 3
            [username] => king3
            [age] => 32
            [course] => ios
        )

    [3] => Array
        (
            [id] => 4
            [username] => king4
            [age] => 42
            [course] => swift
        )

    [4] => Array
        (
            [id] => 5
            [username] => king5
            [age] => 52
            [course] => android
        )

    [5] => Array
        (
            [id] => 6
            [username] => king6
            [age] => 62
            [course] => c++
        )

)

 */

echo '</pre>';