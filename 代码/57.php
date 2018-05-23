<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

function a(){
	static $a=5;
	$a +=1;
	return $a;
}
//echo a(),'<br>';
/*echo a(),'<br>';
echo a(),'<br>';
echo a(),'<br>';*/

/*function open($path){
	$fh = opendir($path);
	return $fh;
}

var_dump(open('.'));
var_dump(open('.'));
var_dump(open('.'));
var_dump(open('.'));*/
/*function open($path){
	static $fh = null;
	if($fh === null){
		$fh = opendir($path);
	}else{
		return $fh;
	}
}

open('.');*/

function C($k,$v){
	static $arr = array();
	$arr[$k] = $v;
	return $arr;
}

print_r(C(1,'a'));
print_r(C(2,'b'));

?>