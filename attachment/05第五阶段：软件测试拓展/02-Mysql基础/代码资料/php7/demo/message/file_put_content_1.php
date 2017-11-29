<?php
/*
 file_put_contents($filename,$data):向指定文件写内容，如果文件不存在，则会创建
 如果存在，会将之前的内容清空在写入
 */
$filename='message.txt';
$data=1;
$data=1.2;
$data=true;
$data='this is a test';
$data=array(1,2,3,4,5,array('a','b','c'));
file_put_contents($filename, $data);