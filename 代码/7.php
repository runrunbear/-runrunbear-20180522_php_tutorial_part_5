<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/


$a = 9;
//$b = $a;
$b = &$a;
unset($a);
$a = 10;
echo $a,$b;//

//var_dump($a);



?>