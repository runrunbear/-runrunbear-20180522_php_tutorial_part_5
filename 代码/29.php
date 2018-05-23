<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*function a(){
	echo $a;
	return $b = 5;
}

$a = 8;
echo a();
echo $b;*/

/*$b = 7;
function b(&$b){
	return $b = $b-1;
}

echo b($b);
echo $b;*/

/*$a = 8;
function c(){
	global $a;//告诉函数去全局变量里找$a
	return $a;
}
echo c();*/

//$GLOBALS全局数组,$_POST,$_GET

/*$a = 1;
$b = 3;

$name = 'zhangsan';
print_r($GLOBALS);*/
function d(){
	$GLOBALS['age'] = 23;
	$GLOBALS['gender'] = 'nv';
}
d();
print_r($GLOBALS);
echo $age;
echo $gender;

?>