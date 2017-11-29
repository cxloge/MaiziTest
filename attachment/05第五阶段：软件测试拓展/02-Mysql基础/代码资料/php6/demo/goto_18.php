<?php
echo 'starting...';
echo '<hr/>';

goto next;

echo 'this is a test';

next://名称:来定义标识符
echo 'this is next ...';
echo '<hr/>';

// goto testFor;//不能跳入循环、switch...case语句、函数和类

// echo 'aaa<br/>';
// for($i=1;$i<=5;$i++){
// 	echo 'hello world<br/>';
// 	testFor:
// 	echo 'hi';
// }
for($i=1;$i<=10;$i++){
	echo $i,'<br/>';
	if($i==3){
		goto eFor;
	}
}

echo '<hr/>';


eFor:

echo 'for loop ending...';

echo '<hr color="red"/>';
for($i=1;$i<=10;$i++){
	for($j=1;$j<=5;$j++){
		echo $i.$j,'<br/>';
		goto tFor;
	}
}


tFor:

echo 'ending...';








