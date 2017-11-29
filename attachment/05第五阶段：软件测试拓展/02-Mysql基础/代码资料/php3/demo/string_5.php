<?php
header('content-type:text/html;charset=utf-8');
// echo "<table>";
// 	echo "<tr>";
// 		echo "<td>x</td>";
// 		echo "<td>x</td>";
// 		echo "<td>x</td>";
// 	echo "</tr>";
// 	echo "<tr>";
// 		echo "<td>x</td>";
// 		echo "<td>x</td>";
// 		echo "<td>x</td>";
// 	echo "</tr>";
// 	echo "<tr>";
// 		echo "<td>x</td>";
// 		echo "<td>x</td>";
// 		echo "<td>x</td>";
// 	echo "</tr>";
// echo "</table>";
// $table="
// 		<table border='1' cellpadding='0' cellspacing='0' width='80%' bgcolor=\"#ABCDEF\">
// 			<tr>
// 				<td>x</td>
// 				<td>x</td>
// 				<td>x</td>
// 			</tr>
// 			<tr>
// 				<td>x</td>
// 				<td>x</td>
// 				<td>x</td>
// 			</tr>
// 			<tr>
// 				<td>x</td>
// 				<td>x</td>
// 				<td>x</td>
// 			</tr>
// 		</table>
// 		";
// echo $table;
$title='test';
$content="在麦子学院学习PHP";
$table=<<<"TABLE"
	<table border='1' cellpadding='0' cellspacing="0" bgcolor="pink">
		<tr>
			<td>编号</td>
			<td>标题</td>
			<td>内容</td>
		</tr>
		<tr>
			<td>1</td>
			<td>{$title}</td>
			<td>{$content}</td>
		</tr>
		<tr>
			<td>x</td>
			<td>x</td>
			<td>x</td>
		</tr>
	</table>
TABLE;
echo $table;
echo '<hr/>';
$test=<<<'EOD'
	this is a test,
	{$title}<br/>
	{$content}	<br/>	
EOD;
echo $test;




















