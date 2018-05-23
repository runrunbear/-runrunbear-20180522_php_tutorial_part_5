<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/


/*$a = 'dksj&&&***';
$b = "abc";
echo $a.$b;
echo $a,$b;*/
//定义大段的双引号字符串
$str1=<<<here
//我是注释
第一段
第二段
第三段
here;
echo $str1;
//定义大段的单引号字符串
$str2 =<<<'NOW'
第一段
第二段
第三段
NOW;
echo $str2;
?>