<?php
$test=function(){
	echo 'this is a test';
};
$test();
$test1=function($username){
	echo "Say Hi To {$username}";
};
$test1('king');
echo '<hr/>';
$test2=function(){
	return 123;
};
var_dump($test2());
echo '<hr/>';

function test(){
	$arg_nums=func_num_args();
	echo $arg_nums;
	echo '<hr/>';
// 	echo func_get_arg(0),'<br/>';
// 	echo func_get_arg(1),'<br/>';
	for($i=0;$i<=$arg_nums-1;$i++){
		echo func_get_arg($i),'<br/>';
	}
	echo '<hr/>';
	$args=func_get_args();
	//print_r($args);
	foreach($args as $arg){
		echo $arg,'<br/>';
	}
}
test('a','b','c','king','queen',1,1,1,1,1,'this is a test');













