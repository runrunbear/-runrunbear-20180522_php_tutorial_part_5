<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/


$a = 3;
//require('./47-2.php');//引入重要的文件,
/*require_once('./47-2.php');
require_once('./47-2.php');
require_once('./47-2.php');
require_once('./47-2.php');
require_once('./47-2.php');
require_once('./47-2.php');*/
//include('./472.php');//引入不太重要的文件,第三方插件
include_once('./47-2.php');
/*include_once('./47-2.php');
include_once('./47-2.php');
include_once('./47-2.php');
include_once('./47-2.php');*/
$arr = include('./47-3.php');
print_r($arr);
echo $a;

?>