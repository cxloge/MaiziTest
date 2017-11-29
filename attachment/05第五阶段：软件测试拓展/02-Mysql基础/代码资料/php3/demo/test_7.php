<?php
// if(exp){
// 	执行exp为真的代码段;
// }else{
// 	执行exp为假的代码段;
// }

// if(true){
// 	echo 'this is true';
// }else{
// 	echo 'this is false';
// }
$var=1;
$var=-123;
$var=0;//false
$var=1.2;
$var=0.0;//false
$var='';//false
$var="";//false
$var=" ";
$var="0";//false
$var='0.0';
$var='false';
$var=null;//false
$var=array();//false
$var=array(1,2,3,0,'',null);
$var=fopen('test_6.php','r');
$var=new stdClass();
if($var){
	echo 'true';
}else{
	echo 'false';
}




