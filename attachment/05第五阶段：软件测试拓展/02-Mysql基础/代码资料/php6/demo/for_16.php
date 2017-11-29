<?php
header('content-type:text/html;charset=utf-8');
/*
 for(exp1;exp2;exp3){
 	循环体;
 }
 */
// echo 'this is a test<br/>';
// echo 'this is a test<br/>';
// echo 'this is a test<br/>';
for($i=1;$i<=10;$i++){
	echo 'this is a test<br/>';
}
echo '<hr/>';
echo $i;
echo '<hr/>';
for($i=1;$i>=10;$i++){
	echo 'hello world<br/>';
}
echo $i;
echo '<hr/>';
//不要写死循环,一定要有结束循环的条件
// for($i=1;$i>=0;$i++){
// 	echo $i,'<br/>';
// }
echo '<hr/>';
for($i=1;$i<=100;$i++){
	echo $i,'<br/>';
}
echo '<hr/>';
for($i=100;$i>=0;$i--){
	echo $i,"<br/>";
}
echo '<hr/>';
//输出0~100之间的偶数
for($i=0;$i<=100;$i+=2){
	echo $i,'<br/>';
}
echo '<hr/>';
for($i=0;$i<=100;$i++){
	if($i%2==0){
		echo $i,'<br/>';
	}
}
echo '<hr/>';
//求1~100之间的和
for($i=1;$i<=100;$i++){
	$sum+=$i;
}
echo $sum;
echo '<hr/>';
//for循环的嵌套

for($i=1;$i<=3;$i++){
	echo '外层循环循环第'.$i.'次<br/>';
	for($j=1;$j<=2;$j++){
		echo '内层循环循环第'.$j.'次<br/>';
	}
	echo '<hr/>';
}

echo '<hr/>';
//3行5列的表格

echo '<table border="1" width="80%" bgcolor="#ABCDEF">';
	for($i=1;$i<=3;$i++){
		echo "<tr>";
			for($j=1;$j<=5;$j++){
				echo '<td>x</td>';
			}
		echo "</tr>";
	}
echo '</table>';
echo '<hr/>';

//break:结束for循环

for($i=1;$i>=0;$i++){
	if($i==10){
		break;
	}
	echo $i,'<br/>';
}

echo '<hr/>';


for($i=1;$i<=10;$i++){
	echo '外层循环循环第'.$i.'次<br/>';
	for($j=1;$j<=5;$j++){
		if($j==3){
			break 2;//跳出2层循环
		}
		echo '内层循环循环第'.$j.'次<br/>';
	}
	echo '<hr/>';
}
echo '<hr/>';

//continue:结束当前循环，进入下次循环
for($i=1;$i<=5;$i++){
	if($i==3){
		continue;
		echo 'hello world';
	}
	echo $i;
}
echo '<hr/>';
//第二个表达式中最后一个条件决定是否能执行循环体
for($i=1,$j=2,$k=3;$i<30,$j<40,$k<=5;$i++,$j++,$k++){
	echo $i,'-',$j,'-',$k,'<br/>';
}
echo '<hr/>';
$i=1;
for(;;){
	if($i>10){
		break;
	}
	echo $i,'<br/>';
	$i++;
}
echo '<hr/>';
$i=1;
for(;$i<=10;$i++){
	echo $i,'<br/>';
}
echo '<hr/>';
$i=1;
for(;;$i++){
	if($i==3){
		break;
	}
	echo $i,"<br/>";
}
echo '<hr/>';
for($i=1;$i<=5;$i++):
	echo $i,'<br/>';
endfor;
/*
 输出99乘法表 
 输出100~999之间的水仙花数
 145=1*1*1+4*4*4+5*5*5
 输出1~100奇数的和
 */



























