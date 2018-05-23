<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
//utf8,一个中文字符占3个字节
//gbk,一个中文字符占2个字节
$a = '中国人好';
//echo strlen($a);//8,字节数

$b = 'abcdefg';
//echo mb_strlen($b);//字符数

//echo strpos($b, 'a');
$str = 'fuck you';
//var_dump(str_replace('fuck', 'F**k', $str));

$str2 = '男人,女人,男孩,女孩';
//echo strtr($str2, '男', '女');
//echo strtr($str2,array('男'=>'女'));

$str3 = 'helloworld';
//substr当第二个参数为负时，代表从右往左数
//第三个参数为正式代表截取的长度
//第耽搁参数为负时，代表的时结束位置
//var_dump(substr($str3, -4,-3));

$study = 'php,java,css,html,linux';
//print_r(explode(',', $study));

$arr = array('name'=>'lisi','age'=>23,'gender'=>'nan');
//echo implode(':', $arr);

$file = '1.html.php';
//echo substr($file,strpos($file, '.')+1);
echo ltrim(strrchr($file, '.'),'.');
?>