<?php
$var=1;
@settype($var,'king');
echo '<hr/>';
//得到上一步产生的错误信息
echo @(3/0);
echo $php_errormsg;
echo '<hr/>';
print_r($_ENV);
echo '<hr/>';
print_r($_SERVER);