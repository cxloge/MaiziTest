<?php
header('content-type:text/html;charset=utf-8');
//得到默认时区
echo @date_default_timezone_get();
echo '<hr/>';
date_default_timezone_set('PRC');
echo '<hr/>';
echo date_default_timezone_get();
echo '<hr/>';
/*
 设置时区：
 通过函数的形式动态设置时区
 date_default_timezone_get():得到当前的默认时区
 date_default_timezone_set($timezone):设置时区
 PRC:中华人民共和国
 Asia/Shanghai
 Asia/Chongqing
 针对于当前脚本有效
 
 通过修改PHP配置文件date.timezone设置时区，针对于所有脚本都生效
 
 ini_set($name,$value):运行时设置PHP的配置选项
 ini_get($name):得到PHP配置选项的值
 
 date($format[,$time=time()]):得到当前服务器的日期时间
 Y:代表4位的年
 m:代表2位的月
 d:代表2位的日
 H:代表2位的小时
 i:代表2位的分钟
 s:代表2位的秒
 w:返回一周内的第多少天，0~6,0代表星期日
 */
echo date("Y年m月d日 H:i:s");