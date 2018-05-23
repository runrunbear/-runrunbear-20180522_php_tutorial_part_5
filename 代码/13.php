<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$a = 8;
$b = $a--;
$b = $a;
$a = $a-1;
//echo $a,$b;//9,8
//先赋值后加减

$f = 9;
$g = --$f;
$f =$f-1;
$g = $f;
echo $f,$g;
//先加减再赋值


?>