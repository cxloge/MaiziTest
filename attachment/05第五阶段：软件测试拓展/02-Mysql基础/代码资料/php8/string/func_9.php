<?php
function test($i){
	echo $i,'<br/>';//3
	if($i>=0){
		test($i-1);//test(2)
		/*
		 echo $i,'<br/>';//2
		if($i>=0){
			test($i-1);//test(1)
			echo $i,'<br/>';//1
			if($i>=0){
				test($i-1);//test(0)
				echo $i,'<br/>';0
				if($i>=0){
					test($i-1);//test(-1)
					echo $i,'<br/>';//-1
					if($i>=0){
						test($i-1);
					}
				}
			}
		}
		 */
	}
}
test(3);
echo '<hr/>';
function test1($i){
	echo $i,'<br/>';//3
	if($i>=0){
		test1($i-1);//test1(2)
		/*
		 	echo $i,'<br/>';//2
			if($i>=0){
				test1($i-1);//test(1)
				 echo $i,'<br/>';//1
				if($i>=0){
					test1($i-1);//test(0)
					 echo $i,'<br/>';//0
					if($i>=0){
						test1($i-1);test1(-1)
							 echo $i,'<br/>';//-1
							if($i>=0){
								test1($i-1);
							}
							echo $i,'<br/>';//-1
					}
					echo $i,'<br/>';//0
				}
				echo $i,'<br/>';//1
			}
			echo $i,'<br/>';//2
		 */
	}
	echo $i,'<br/>';//3
}
test1(3);
echo '<hr/>';

function test2($i){
	echo $i,'<br/>';
	$i--;
	if($i>0){
		$func=__FUNCTION__;
		$func($i);
	}
	echo $i,'<br/>';
}

test2(3);









