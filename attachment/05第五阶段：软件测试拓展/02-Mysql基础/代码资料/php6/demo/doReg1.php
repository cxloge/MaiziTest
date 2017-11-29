<?php
header('content-type:text/html;charset=utf-8');
//接收信息
$username=$_POST['username'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$email=$_POST['email'];
$age=$_POST['age'];
$verify=$_POST['verify'];
$verify1=$_POST['verify1'];

//1.检测用户名首字母的合法性
$ascii=ord($username{0});
if(!(($ascii>=97&&$ascii<=122)||($ascii>=65&&$ascii<=90))){
	exit('用户名首字母不是以字母开始');
}
//2.检测用户名长度
if(strlen($username)<5 || strlen($username)>10){
	exit('用户名长度不符合规范');
}

//3.检测密码是否为空
if(strlen($password)==0){
	exit('密码不能为空');
}

//4.检测两次密码是否一致
if(strcmp($password,$password1)!=0){
	exit('两次密码不一致');
}

//5.检测邮箱是否符合规范
if(strpos($email,'@')===false){
	exit('邮箱不符合规范');
}

//6.验证年龄是否符合规范
if($age<1 || $age>125){
	exit('非法年龄');
}

//7.比较两次验证码是否相同
if(strcasecmp(trim($verify),trim($verify1))!=0){
	exit('两次验证码不一致');
}
echo '恭喜您'.$userLen.'注册成功<br/>';
echo '注册信息如下：<br/>';
$password=md5($password);
$userInfo=<<<EOF
							<table border='1' cellpadding='0' cellspacing='0' width='60%' bgcolor='pink'>
								<tr>
									<td>用户名</td>
									<td>{$username}</td>
								</tr>
								<tr>
									<td>密码</td>
									<td>{$password}</td>
								</tr>
								<tr>
									<td>邮箱</td>
									<td>{$email}</td>
								</tr>
								<tr>
									<td>年龄</td>
									<td>{$age}</td>
								</tr>
							</table>
EOF;
echo $userInfo;
echo '3秒钟之后跳转到登陆页面<br/>';
echo '<meta http-equiv="refresh" content="3;url=http://www.maiziedu.com/"/>';









