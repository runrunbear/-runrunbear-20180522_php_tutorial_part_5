<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*$a = 120;
$b = 78;
$c = ($a>$b);
var_dump($c);*/
//比较运算返回的是布尔值

$a = 'abcdefg';
$pos = strpos($a, 'a');
//echo $pos;
//两个等号值判断值是否相等
//三个等号是怕暖值相等,而且变量类型也相等才可以
/*if($pos === false){
	echo '没找到';
}else {
	echo '找到了';
}*/

if($pos !== false){
	echo '找到了';
}else {
	echo '没找到';
}
?>