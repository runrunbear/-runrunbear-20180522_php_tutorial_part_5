<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*$res = 1;
if($res == 1){
	echo '冠军';
}else if($res == 2){
	echo '亚军';
}else if($res == 3){
	echo  '季军';
}else {
	echo '谢谢参与';
}*/

$ren = 2;

switch ($ren) {
	case 1:
	echo '冠军';
	break;

	case 2:
	case 3:
	echo '亚军';
	break;

	case 4:
	case 5:
	echo '季军';
	break;

	default:
	echo '谢谢参与';
}

?>