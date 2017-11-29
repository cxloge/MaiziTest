<?php
header('content-type:text/html;charset=utf-8');
//比较运算符的例子
var_dump(3>1,3<1,3>=1,3<=1);
echo '<hr/>';
//== != <>,只比较值是否相同
//=== !==，值和类型都要相同才为true
var_dump(1==1,1=='1',1==true);
echo '<hr/>';
var_dump(1!=0,1<>false);
echo '<hr/>';
var_dump(1===1,1==='1',1!==true);
echo '<hr/>';
$str='maiziaedu';
//strpos($string,$search[,$offset]):查找一个字符串中是否存在另一个字符串，如果找到了，返回这个字符串
//第一次出现的位置，如果没找到返回false
echo strpos($str,'a');
echo '<hr/>';
echo 'A',strpos($str,'zd'),'B';
echo '<hr/>';
echo 'A',strpos($str,'A'),'B';
echo '<hr/>';
if(strpos($str,'m')!==false){
	echo '找到了';
}else{
	echo '没找到';
}
echo '<hr/>';
if(strpos($str,'M')===false){
	echo '没找到!';
}else{
	echo '找到了！';
}

//@,简单验证邮箱的合法性，如果合法应该输出合法邮箱，非法邮箱










