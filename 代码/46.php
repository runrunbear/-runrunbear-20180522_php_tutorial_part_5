<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//define('PI', 3.14);//常量的定义方式
//echo PI;
//PI=5.14;
//echo PI;//常量一旦定义就不能被修改
//unset('PI');//常量一旦定义就不能被销毁
//echo PI;
//var_dump(isset('PI'));
//var_dump(defined('PI'));
/*if(!defined('PI')){
	define('PI', 3.14);
}*/

//echo PI;

//defined('PI')||define('PI', 3.14);//逻辑运算||的短路特性

function t1(){
	t2();
}
function t2(){
	t3();
}
function t3(){
	define('PI', 3.14);
}
t1();
echo PI;
?>