<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*function t(){
	echo '!';
	t();
}

t();*/

function sum($num){
	if($num>1){
		return $num+sum($num-1);
	}else{
		return 1;
	}
}

echo sum(100);

/*sum(5);
5+sum(4);
4+sum(3);
3+sum(2);
2+1;
*/
?>