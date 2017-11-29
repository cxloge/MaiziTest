<?php
$arr=array(
		3=>'a',
		'b',
		5=>'c'
);
list($var1,$var2,$var3,$var4,$var5,$var6)=$arr;
echo $var1,'-',$var2,'-',$var3;
echo '<hr/>';
echo $var4,'-',$var5,'-',$var6;
echo '<hr/>';
list(,,,$var4,$var5,$var6)=$arr;
echo $var4,'-',$var5,'-',$var6;
echo '<hr/>';
$arr=array('username'=>'king','age'=>123);
list($username,$age)=$arr;
echo $username,'-',$age;
echo '<hr color="red"/>';
$arr=array(
		'a',
		12=>'this is a test',
		'username'=>'king',
		'age'=>'12',
		'married'=>false,
		'test'=>'hello world'
);
// print_r(each($arr));
// echo '<hr/>';
// print_r(each($arr));
// echo '<hr/>';
// print_r(each($arr));
// echo '<hr/>';
// print_r(each($arr));
// echo '<hr/>';
// print_r(each($arr));
// echo '<hr/>';
// print_r(each($arr));
// echo '<hr/>';
// var_dump(each($arr));
while((list($key,$val)=each($arr))!==false){
	echo 'key='.$key,'-val='.$val;
	echo '<hr/>';
}








