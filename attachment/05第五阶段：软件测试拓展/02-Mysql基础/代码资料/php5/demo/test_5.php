<?php
//逻辑与的例子
var_dump(
true && true,
true && false,
false && true,
false && false
);
//短路的现象，第一个表达式为假
echo '<hr/>';
$i=1;
$j=0;
if($i&&$j){//1->true && 0->false
	echo 'true<br/>';
}else{
	echo 'false<br/>';
}
var_dump($i,$j);
echo '<hr/>';



$i=1;
$j=0;
if(--$i&&$j++){//0->false
	echo 'true<br/>';
}else{
	echo 'false<br/>';
}
var_dump($i,$j);//0,0
echo '<hr/>';

$i=true;
if(--$i && ++$test){//true && 1->true
	echo 'true<br/>';
}else{
	echo 'false<br/>';
}
echo '<hr/>';

//逻辑或
//如果第一个表达式为true，造成短路

var_dump(
true || true,
true || false,
false || true,
false || false
);
echo '<hr/>';
$i=1;
$j=0;
if($i-- || $j++){//1->true ||
	echo 'true<br/>';
}else{
	echo 'false<br/>';
}
var_dump($i,$j);//0,0
echo '<hr/>';

$i=1;
if(--$i || settype($i,'king')){//0->false || false
	echo 'true<br/>';
}else{
	echo 'false<br/>';
}
echo '<hr/>';

//逻辑非 !
var_dump(!true);
echo '<hr/>';
var_dump(!0);

echo '<hr/>';
//逻辑异或 xor
var_dump(
true xor true,
true xor false,
false xor true,
false xor false
);















