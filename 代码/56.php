<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*$arr = array(1,2,3,array('c',4,array(5,6)));

function multArr($arr){
	foreach($arr as $k=>$v){
		if(is_int($v)){
			$arr[$k]= $v*2;
		}else if(is_array($v)){
			$arr[$k] = multArr($v);
		}
	}
	return $arr;
}

print_r(multArr($arr));*/

$arr2 = array(1,2,3,array(4,array(5,6)));
function sumArr($arr){
	$i=0;
	foreach($arr as $k=>$v){
		if(is_int($v)){
			$i = $i+$v;
		}else if(is_array($v)){
			$i +=sumArr($v);
		}
	}
	return $i;
}

echo sumArr($arr2);

?>