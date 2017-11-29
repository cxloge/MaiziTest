<?php
header('content-type:text/html;charset=utf-8');
 echo date_default_timezone_get();
// echo '<hr/>';
// date_default_timezone_set('Asia/Chongqing');
// echo date_default_timezone_get();
echo '<hr/>';
echo ini_get('date.timezone');
echo '<hr/>';
ini_set('date.timezone','PRC');
echo date_default_timezone_get();
echo '<hr/>';
echo date("Y-m-d H:i:s");
echo '<hr/>';
echo date('Y');
echo '<hr/>';
//time():得到当前的时间戳
echo time();
echo '<hr/>';
echo date("Y/m/d H:i:s",time());
echo '<hr/>';
echo date("Y/m/d H:i:s",time()+24*3600);
echo '<hr/>';
echo date('w');
echo '<hr/>';

$day=date('w');
if($day==0){
	$day='星期日';
}elseif($day==1){
	$day='星期一';
}elseif($day==2){
	$day='星期二';
}elseif($day==3){
	$day='星期三';
}elseif($day==4){
	$day='星期四';
}elseif($day==5){
	$day='星期五';
}elseif($day==6){
	$day='星期六';
}
$dateStr=date("Y年m月d日 ").$day;
echo $dateStr;


















