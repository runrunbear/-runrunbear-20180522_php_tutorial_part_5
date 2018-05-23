<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*$a = 'b';
$b = $a;
$a = 'c';
$b = 'k';
echo $b;//'b'//b
echo $a;*/


$a = 6;
$b = &$a;
$a = 8;
$b = 10;
echo $a,$b;
?>