<?php
echo '<pre>';
//快速创建索引数组
$arr=range(5,10);
print_r($arr);
$arr=range(1.1,6.6);
print_r($arr);
$arr=range('a','z');
print_r($arr);
echo '<hr/>';
$arr=range(1,10,2);//步长
print_r($arr);
//compact快速关联数组
$username='king';
$age=12;
$email='382771946@qq.com';
$addr='bj';
// $userInfo['username']=$username;
// $userInfo['age']=$age;
// $userInfo['email']=$email;
// $userInfo['addr']=$addr;
// print_r($userInfo);
$userInfo=compact('username','age','email','addr');
print_r($userInfo);





echo '</pre>';



