<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//1.初始值，判断条件，循环体，步长
//打印1-100
/*for ($i=1,$j=10; $i <= $j ; $i++,$j--) { 
	echo $i,'.....',$j,'<br>';
}*/

$i = 1;
$j=10;
for(;$i<$j;){
	echo $i,'.....',$j,'<br>';
	$i++;
	$j--;
}
?>