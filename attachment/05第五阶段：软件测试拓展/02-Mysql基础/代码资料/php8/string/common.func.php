<?php
/**
 * 截取文件扩展名
 * @param string $filename
 * @return string
 */
function getExt($filename) {
	$arr = explode ( '.', $filename );
	$ext = end ( $arr );
	return strtolower ( $ext );
}