<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
$start = microtime();
for($m=1;$m<=100;$m++){
	for($g=1;$g<=100;$g++){
			for($s=1;$s<=100;$s++){
				if(($m+$g+$s==100) && ($m*3+$g*5+$s/3)==100) {
				echo '公鸡',$g,'只,母鸡',$m,'只,小鸡',$s,'只<br />';
			}
		}
	}
}
$end = microtime();

echo $end-$start;
?>