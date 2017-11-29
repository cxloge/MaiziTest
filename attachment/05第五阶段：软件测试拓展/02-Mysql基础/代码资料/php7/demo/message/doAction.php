<?php
//接收数据
header("content-type:text/html;charset=utf-8");
$username=$_POST['username'];
$title=$_POST['title'];
$content=$_POST['content'];
//1.过滤内容中html标记
//$content=strip_tags($content);
//2.转换成HTML实体
$content=htmlentities($content);
$xinqing=$_POST['xinqing'];
//如果是随机心情，应该产生随机数
$xinqing=$xinqing=="rand.gif"?mt_rand(1,7).".gif":$xinqing;
$act=$_GET['act'];
$time=time();//得到当前的时间戳
$ip=$_SERVER['REMOTE_ADDR'];//得到客户端的IP地址
$id=$_GET['id'];//接收操作的数组的键名
$filename='message.txt';
//根据不同操作完成不同功能
if(file_exists($filename)&&filesize($filename)>0){
	$string=file_get_contents($filename);
	$mesInfo=unserialize($string);
}
if($act=='addMes'){
	//如果message.txt文件存在，并且有内容，把之前的留言读取出来之后，在动态添加
	//file_exists($path):检测文件或者目录是否存在
	//filesize($filename):得到文件大小，返回的是字节
	//file_get_contents($filename):返回文件中的内容
// 	if(file_exists($filename)&&filesize($filename)>0){
// 		$string=file_get_contents($filename);
// 		$mesInfo=unserialize($string);
// 	}
	//添加留言的功能
	$mesInfo[]=compact('username','title','content','xinqing','time','ip');
	$data=serialize($mesInfo);//序列化数组之后在保存
	if(file_put_contents($filename, $data)){
		echo '添加留言成功<br/><a href="addMessage.php">继续添加</a>|<a href="index.php">查看留言</a>';
	}else{
		echo '添加留言失败<br/><a href="addMessage.php">重新添加</a>';
	}
	
}elseif($act=='editMes'){
	//完成更新留言的操作
	//if(file_exists($filename)&&filesize($filename)>0){
		//$str=file_get_contents($filename);
		//$mesInfo=unserialize($str);
		$mesInfo[$id]['username']=$username;
		$mesInfo[$id]['title']=$title;
		$mesInfo[$id]['content']=$content;
		$mesInfo[$id]['xinqing']=$xinqing;
		$data=serialize($mesInfo);
		if(file_put_contents($filename, $data)){
			echo '更新成功<br/>3秒钟之后跳转到查看留言页面';
			
		}else{
			echo '更新失败<br/>3秒钟之后跳转到查看留言页面';
		}
		echo '<meta http-equiv="refresh" content="3;url=index.php"/>';
	//}
}elseif($act=='delMes'){
	//删除留言的功能
	//if(file_exists($filename)&&filesize($filename)>0){
		//$str=file_get_contents($filename);
		//$mesInfo=unserialize($str);
		unset($mesInfo[$id]);
		$data=serialize($mesInfo);
		file_put_contents($filename, $data);
		header('location:index.php');//实现页面跳转
	//}
}









