<?php
echo '<pre>';
//索引+索引数组
$arr=array(
		array(1,1,1),
		array(2,2,2)
);
print_r($arr);
//索引+关联
$arr=array(
	array('useranme'=>'king','age'=>12),
	array('username'=>'soniya','age'=>43)	
);
print_r($arr);
//关联+索引
$arr=array(
	'username'=>array('king','queen','soniya','rose'),
	'age'=>array(12,23,43,22)	
);
print_r($arr);
echo $arr['username'][0];
echo '<hr/>';
echo $arr['age'][0];
//关联+关联

//关键多维数组
$arr=array(
		array(array(1))
);
print_r($arr);
echo $arr[0][0][0];
echo '<hr/>';
$arr1[][]='hello world';
print_r($arr1);
$arr2[]['username']='king';
$arr2[0]['age']=12;
$arr2[]['test']='this is a test';
print_r($arr2);
$arr3['username'][]='king';
$arr3['username'][]='queen';
$arr3['age'][]=12;
$arr3['age'][]=23;
print_r($arr3);
$arr4['test']['a']=1;
print_r($arr4);
//索引+关联(很重要)
$arr5[][][][][][]='this is a test';
print_r($arr5);
echo '<hr/>';
$userInfo['username']=array('king','queen');
print_r($userInfo);
echo '<hr/>';
$users[]=array('id'=>1,'username'=>'king1','age'=>12);
$users[]=array('id'=>2,'username'=>'king2','age'=>22);
$users[]=array('id'=>3,'username'=>'king3','age'=>32);
$users[]=array('id'=>4,'username'=>'king4','age'=>42);
print_r($users);











echo '</pre>';
