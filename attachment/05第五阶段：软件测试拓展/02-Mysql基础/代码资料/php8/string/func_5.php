<?php
header('content-type:text/html;charset=utf-8');
function createTable() {
	$rows=3;
	$cols=3;
	echo "<table border='1' width='80%' bgcolor='pink'>";
	for($i = 1; $i <= $rows; $i ++) {
		echo '<tr>';
		for($j = 1; $j <= $cols; $j ++) {
			echo '<td>x</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}
createTable();
echo '<hr/>';
function createTable1($rows,$cols,$bgColor='pink') {
	echo "<table border='1' width='80%' bgcolor='{$bgColor}'>";
	for($i = 1; $i <= $rows; $i ++) {
		echo '<tr>';
		for($j = 1; $j <= $cols; $j ++) {
			echo '<td>x</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}
createTable1(2,5);
echo '<hr/>';
$rows=4;
$cols=3;
createTable1($rows, $cols);
echo '<hr/>';
//当函数参数中既有必选参数又有可选参数，必选参数一定在可选参数之前
createTable1($rows, $cols,'red');

echo '<hr/>';
/**
 * 截取文件扩展名
 * @param string $filename
 * @return string
 */
//Ctrl+Shift+j
function getExt($filename) {
	//$filename = '1.txt.html.jpeg';
	$arr = explode ( '.', $filename );
	$ext = strtolower ( end ( $arr ) );
	return $ext;
}
$filename='1.txt.html';
echo getExt($filename);
echo '<hr/>';

//2014年12月7日 星期三默认的形式
//2014/12/7 星期三
function getDateStr($del1='年',$del2='月',$del3='日') {
	$day = date ( 'w' ); // 0~6
	$search = array (
			0,
			1,
			2,
			3,
			4,
			5,
			6 
	);
	$replace = array (
			'日',
			'一',
			'二',
			'三',
			'四',
			'五',
			'六' 
	);
	$day = str_replace ( $search, $replace, $day );
	return date ( "Y{$del1}m{$del2}d{$del3}" ) . ' 星期' . $day;
}
echo getDateStr();
echo '<hr/>';
echo getDateStr('-','-','');
















