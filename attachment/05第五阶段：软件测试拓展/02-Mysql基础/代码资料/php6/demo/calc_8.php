<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="#" method='post'>
		num1: <input type="text" name="num1" id="" />
		op: <select name="op" id="">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="%">%</option>
			</select>
		num2: <input type="text" name="num2" id="" />
		<input type="submit" name='sub' value="计算" />
	</form>

	<?php 
	//接收数据
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$op=$_POST['op'];
	$sub=$_POST['sub'];
	//var_dump($sub);
	//判断用户是否点了计算的按钮
	if(isset($sub)){
		//判断这两个数字是否为数值型
		if(is_numeric($num1)&&is_numeric($num2)){
			if($op=='+'){
				$res=$num1+$num2;
			}elseif($op=='-'){
				$res=$num1-$num2;
			}elseif($op=='*'){
				$res=$num1*$num2;
			}elseif($op=='/'){
				//判断num2是否为0
				if($num2==0){
					exit('0不能当作被除数');
				}else{
					$res=$num1/$num2;
				}
			}elseif($op=='%'){
				$res=$num1%$num2;
			}else{
				echo '非法操作符';
			}
			echo "{$num1}{$op}{$num2}={$res}";
		}else{
			echo '非法数字，重新输入';
		}
		
		
	}else{
		echo '请输入数字进行计算';
	}
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>