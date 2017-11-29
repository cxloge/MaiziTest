<?php
// serialize($value)：返回序列化之后的字符串
$value=1;//i:1;
$value=1.2;//d:1.2;
$value=true;//b:1;
$value='king';//s:4:"king";
$value=null;//N;
$value=array('a','b',true,'',null);//a:5:{i:0;s:1:"a";i:1;s:1:"b";i:2;b:1;i:3;s:0:"";i:4;N;}
echo serialize($value);
echo '<hr/>';
//unserialize($value):将序列化之后的字符串反序列化
echo unserialize('i:1;');
echo '<hr/>';
echo unserialize('s:4:"king";');
echo '<hr/>';
print_r(unserialize('a:5:{i:0;s:1:"a";i:1;s:1:"b";i:2;b:1;i:3;s:0:"";i:4;N;}'));