<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr = array('name'=>'zhangsan','age'=>23,'gender'=>'nv');
/*next($arr);
prev($arr);
end($arr);
reset($arr);
echo current($arr);*/
//print_r(each($arr));
/*while($row = each($arr)){
	print_r($row);
	echo '<br>'; 
}
$arr2 = array('a','b','c','d');
list($a,$b,$c,$d) = $arr2;
echo $a,'<br>';
echo $b,'<br>';
echo $c,'<br>';*/
while($row = each($arr)){
	list($k,$v)=$row;
	echo $k,':',$v,'<br>';
}
?>