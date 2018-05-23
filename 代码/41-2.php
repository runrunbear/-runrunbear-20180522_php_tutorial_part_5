<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$stu = array('san'=>3,'lisi'=>4,'wang'=>5,'zhao'=>6);

foreach($stu as $k=>$v){
	//$v = $v*2;
	$stu[$k] = $v*2;
}
print_r($stu);
?>