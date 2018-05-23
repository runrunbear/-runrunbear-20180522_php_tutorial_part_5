<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*echo 1,'*',1,'=',1*1,'<br>';
echo 1,'*',2,'=',1*2;
*/

for($num=1;$num<10;$num++){
	//echo $num,'~~~';
	for($a=1;$a<=$num;$a++){
		echo $num,'*',$a,'=',$num*$a,'&nbsp;';
	}
	echo '<br>';
}
?>