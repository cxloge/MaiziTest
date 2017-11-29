<?php 
header('content-type:text/html;charset=utf-8');
//读取所有留言
//判断是否有这个message.txt这个文件，并且文件中有内容再来读取
$filename='message.txt';
if(file_exists($filename)&&filesize($filename)>0){
	$str=file_get_contents($filename);
	$mesInfo=unserialize($str);
	//var_dump($mesInfo);
	if(!is_array($mesInfo)){
		echo ('出错了，重新添加<br/>3秒钟之后跳转到添加留言页面');
		echo "<meta http-equiv='refresh' content='3;url=addMessage.php'/>";
	}
	if(count($mesInfo)==0){
		echo '没有留言，请添加<br/>3秒钟之后跳转到添加留言页面';
		echo "<meta http-equiv='refresh' content='3;url=addMessage.php'/>";
	}
}else{
	echo '没有留言，请添加<br/>3秒钟之后跳转到添加留言页面';
	echo "<meta http-equiv='refresh' content='3;url=addMessage.php'/>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<h2>留言列表页面-<a href='addMessage.php'>添加留言</a></h2>
	<table border='1' width='100%' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF'>
		<tr>
			<td>编号</td>
			<td>标题</td>
			<td>内容</td>
			<td>留言者</td>
			<td>发布时间</td>
			<td>ip地址</td>
			<td>心情</td>
			<td>操作</td>
		</tr>
		<?php $i=1;foreach($mesInfo as $key=> $mes):?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $mes['title'];?></td>
				<td><?php echo $mes['content'];?></td>
				<td><?php echo $mes['username'];?></td>
				<td><?php echo date("Y/m/d H:i:s",$mes['time']);?></td>
				<td><?php echo $mes['ip'];?></td>
				<td><img src="images/<?php echo $mes['xinqing'];?>" alt="" /></td>
				<td><a href="editMes.php?id=<?php echo $key;?>">更新</a>|<a href="doAction.php?act=delMes&id=<?php echo $key;?>">删除</a></td>
			</tr>
		<?php $i++;endforeach;?>
		
		
		
		
		
	</table>
	
</body>
</html>