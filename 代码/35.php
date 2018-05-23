<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
$c = 5;
//单引号只能识别两个转义字符,\',\\
//单引号不能识别变量
$a = 'abc\'\\\ndefg$c';
echo $a,'<br>';


//双引号可以识别多个转义字符
//双引号能识别变量
$b = "abc\"\\\t\ndefg$c";
echo $b;

//"insert into user values($_POST[name])"
?>