<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<h2>添加留言页面</h2>
	<form action="doAction.php?act=addMes" method='post'>
		<table border='1' width='80%' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF'>
			<tr>
				<td>留言者</td>
				<td><input type="text" name="username" id=""  placeholder='请输入您的昵称'/></td>
			</tr>
			<tr>
				<td>标题</td>
				<td><input type="text" name="title" id=""  placeholder='请输入标题'/></td>
			</tr>
			<tr>
				<td>内容</td>
				<td>
					<textarea name="content" id="" cols="40" rows="5" placeholder='请输入留言内容'></textarea>
				</td>
			</tr>
			<tr>
				<td>心情</td>
				<td>
					<input type="radio" name="xinqing" id="" value='1.gif' checked='checked'/><img src="images/1.gif" alt="" title='开森' />
					<input type="radio" name="xinqing" id="" value='2.gif' /><img src="images/2.gif" alt="" title='桑心' />
					<input type="radio" name="xinqing" id="" value='3.gif' /><img src="images/3.gif" alt="" title='得瑟'/>
					<input type="radio" name="xinqing" id="" value='4.gif' /><img src="images/4.gif" alt="" title='委屈' />
					<input type="radio" name="xinqing" id="" value='5.gif' /><img src="images/5.gif" alt="" title='纠结'/>
					<input type="radio" name="xinqing" id="" value='6.gif' /><img src="images/6.gif" alt="" title='泪奔' />
					<input type="radio" name="xinqing" id="" value='7.gif' /><img src="images/7.gif" alt="" title='无奈'/>
					<input type="radio" name="xinqing" id="" value='rand.gif' /><img src="images/rand.gif" alt="" title='随机' />
				</td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" value="发布留言" /></td>
			</tr>
		</table>
	</form>
	
</body>
</html>