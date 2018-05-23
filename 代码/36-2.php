<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
//$path = '.';
$path = isset($_GET['dir'])?$_GET['dir']:'.';
$fh = opendir($path);

//echo $row = readdir($fh),'<br>';
/*while(($row = readdir($fh)) !== false){
	//echo $row = readdir($fh),'<br>';
	echo $row,'<br>';
}
closedir($fh);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>文件管理系统</h1>
	<table border=1>
		<tr>
			<td>名称</td>
			<td>操作</td>
		</tr>
		<?php while(($row = readdir($fh)) !== false){?>
		<tr>
			<td><?php echo $row;?></td>
			<td><a href="36-2.php?dir=<?php echo $path,'/',$row;?>">查看</a></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>