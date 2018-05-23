<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*function a($a){
	$a = $a+1;
	return $a;
}

$b = 7;
echo a($b);
echo $b;*/
function a(&$a){
	$a = $a+1;
	return $a;
}

$b = 8;
echo a($b);
echo $b;


?>