<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr2 = array('name'=>'wangwu','age'=>25,'hobby'=>array('football','pingpang','season'=>array('春','夏','秋','冬')));

//echo $arr2['age'];
//echo $arr2['hobby'][1];
//echo $arr2['hobby']['season'][2];
//$arr2['age'] = 18;
//print_r($arr2);
//unset($arr2['hobby'][1]);
//print_r($arr2);
//$arr2['gender']='nan';
//print_r($arr2);
$arr2['hobby'][]='basketall';
print_r($arr2);
?>