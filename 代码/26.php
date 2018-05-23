<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
//一段封装起来的代码
function say(){
	return 'hello';
}
//echo say();

//

function add($a,$b){
	$sum = $a+$b;
	$a = $a-1;
	$b = $b-1;
	echo '~~~~~';
	return  $sum;
}

echo add(7,8);

?>