<?php
echo 1+2-3*4/5;
echo '<hr/>';
echo (1+2-3)*4/5;
echo '<hr/>';

$j=0;
if($m=(1&&$j++)){//1->true && 0->false
	echo 'true<br/>';
}else{
	echo 'false<br/>';
}
var_dump($j,$m);
echo '<hr/>';
$j=1;
if($m=0&&++$j){
	echo 'true<br/>';	
}else{
	echo 'false<br/>';
}
var_dump($j,$m);//false
echo '<hr/>';
if($i=0 && $k=1){
	echo 'true<br/>';
}else{
	echo 'false<br/>';
}
var_dump($i,$k);

echo '<hr/>';
if(($i=1) && ($k=1)){
	echo 'true<br/>';
}else{
	echo 'false<br/>';
}
var_dump($i,$k);
echo '<hr/>';
$i=1;
echo 1+ ++$i;
echo '<hr/>';
$i=1;
echo ++$i +1;
echo '<hr/>';
$i=1;
echo ++$i + $i++;//2+2++ 
echo '<hr/>';
echo $i;
echo '<hr/>';
$i=1;
echo 1+ ++$i + $i++;//1 +2 +2 ++
echo '<hr/>';
echo $i;
echo '<hr/>';
$i=1;
echo 1+$i + ++$i;//1+ 2+  2=5
echo '<hr/>';
$i=1;
echo $i+ ++$i +1;
echo '<hr/>';

//3+5=8
$i=3;
$j=5;
echo $i.'+'.$j.'='.$i+$j;
echo '<hr/>';
echo $i.'1+a'.$j.'='.$i+$j;//'31+a5=3'+5
echo '<hr/>';
echo $i.'+'.$j.'='.($i+$j);
echo '<hr/>';


































