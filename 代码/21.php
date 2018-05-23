<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*$money = 100000;
$i++
$money>50000
$money = $money-$money*0.05
$money<=50000
$money = $money-5000*/

for($i=1,$money=100000;$money>=5000;$i++){
	if($money>50000){
		$money = $money-$money*0.05;
	}else if($money<=50000){
		$money = $money-5000;
	}
	echo '当经过',$i,'次路口时，所省钱钱数为',$money,'<br>';
}

?>