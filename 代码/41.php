<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr = array('a','b','c','d');//索引数组
//echo $arr[0];

/*for($i=0;$i<count($arr);$i++){
	echo $arr[$i];
}*/
/*
foreach ($arr as $key=>$value) {
	
	echo $value;
}*/
$arr2 = array('name'=>'zhangsan','age'=>23,'gender'=>'nv');
print_r(array_keys($arr2));

?>