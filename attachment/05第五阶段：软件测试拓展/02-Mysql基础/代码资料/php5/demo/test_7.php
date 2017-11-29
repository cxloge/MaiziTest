<?php

if(3>1){
	echo 'true';
}else{
	echo 'false';
}
echo '<hr/>';
echo 3>1?'true':'false';
echo '<hr/>';
$username='king';
if($username=='king'){
	echo 'Say Hi to King';
}else{
	echo 'Say Hi to Others';
}
echo '<hr/>';
$res=$username=='king'?'Say Hi to King':'Say Hi to Others';
echo $res;
echo '<hr/>';
$res=$test==false?0:1;
echo $res;
echo '<hr/>';

$res=1===true?:'this is false';
var_dump($res);








