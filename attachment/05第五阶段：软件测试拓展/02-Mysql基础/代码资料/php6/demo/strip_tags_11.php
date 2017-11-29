<?php
$string='<h1>this is a test</h1>';
/*
 strip_tags($string[,$allowTags]):过滤HTML标记
 */
echo strip_tags($string);
echo '<hr/>';
$string='<h1><a href="http://www.maiziedu.com/">maiziedu</a></h1>';
echo $string;
echo '<hr/>';
echo strip_tags($string);
echo '<hr/>';
echo strip_tags($string,'<a>');