<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr = array('a','b','c','d','f');
/*echo count($arr);
echo count('hello');
echo count(null);*/
$arr2 = array('青龙'=>1,'白虎'=>2,'朱雀'=>3,'玄武'=>4);

//var_dump(array_key_exists('鲲鹏', $arr2));

//var_dump(in_array(2, $arr2));
if(in_array(1, $arr2)){
	echo '存在';
}else{
	echo '不存在';
}


?>