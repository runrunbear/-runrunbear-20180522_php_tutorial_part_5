<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
//&&并且：两个条件都为真时才会返回真
//&&并且：一真一假是为假
$house = false;
$car = true;
if($house&&$car){
	echo '约';
}else{
	echo '你是个好人';
}
//或者||：一真一假是为真
//两个条件都为假时才会返回假

$house = false;
$car = false;
if($house||$car){
	echo '约';
}else{
	echo '你是个好人';
}



?>