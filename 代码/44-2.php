<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr = array(1,0,0,0,0);

for($i=1;$i<=20;$i++){
	array_pop($arr);
	array_unshift($arr,0);
	$arr[0] = $arr[2]+$arr[4];
}

print_r($arr);
echo array_sum($arr);

?>