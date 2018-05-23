<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*$g+$m+$x==100
$g*5+$m*3+$x/3==100*/

for($g=1;$g<=18;$g++){
	for($m=1;$m<=31;$m++){
		$x = 100-$g-$m;
			if($g*5+$m*3+$x/3==100){
				echo '公鸡',$g,'母鸡',$m,'小鸡',$x,'<br>';
			}
		
	}
}

?>