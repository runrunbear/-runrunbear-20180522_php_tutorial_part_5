<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$house = false;
$car = true;

/*if($house&&$car){
	echo '嫁人';
}else{
	echo '滚蛋';
}*/
/*$a = 1;
$house && ($a = 8);
echo $a;*///8//1
/*$b = 2;
//$house||($b=9);
$car||($b=9);
echo $b;*///9//2
//defined('PI');
/*if(!defined('PI')){
	define('PI',3.14);
}*/
//defined('PI')||define('PI', 3.14);
$a=1;
$b=2;
if(($a=8) && ($b=9)){
	echo 'yes';
}else {
	echo 'no';
}
echo $a,$b;//1,2//8,2

?>