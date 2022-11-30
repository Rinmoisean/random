(<?php
//1-6
echo strtoupper('php');
echo '<br>';
echo '<br>';
echo strtolower('PHP');
echo '<br>';
echo '<br>';
echo ucfirst('london');
echo '<br>';
echo '<br>';
echo lcfirst('London');
echo '<br>';
echo '<br>';
echo ucwords('london is the capital of great britain');
echo '<br>';
echo '<br>';
echo ucfirst(strtolower('LONDON'));
//7-8
echo strlen('html css php');
echo '<br>';
echo '<br>';
$password='hjvgncdgbbvfgh';
$w=strlen($password);
if ($w > 5 and $w <10) {
	echo ('пароль подходит');
}
else{
	echo ('нужно придумать другой пароль');
}
echo '<br>';
echo '<br>';
//9-15
echo substr('html css php', 0, 4).'<br>'.substr('html css php', 5, 3).'<br>'.substr('html css php', 9);
echo '<br>';
echo '<br>';
echo substr('html css php', 0, 3).'<br>'.substr('html css php', -3, 3);
echo '<br>';
echo '<br>';
$str='html css php';
if (strlen($str) > 5){
echo substr($str, 0, 5).'...';
}
else
echo $str;
echo '<br>';
echo '<br>';
//16-18
$str='31.12.2013';
echo str_replace('.', '-', $str);
echo '<br>';
echo '<br>';

echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abcabc');
echo '<br>';
echo '<br>';

$str='1a2b3c4b5d6e7f8g9h0';
echo str_replace([1,2,3,4,5,6,7,8,9,0], '', $str);
echo '<br>';
echo '<br>';

//19
$str='abcabc';
echo strtr($str, ['a'=>'1', 'b'=>'2', 'c'=>'3']);
echo '<br>';
echo strtr($str,'abc','123' );
echo '<br>';
echo '<br>';
//20
$str='abcde';
echo substr_replace($str, '!!!', 2, 5);
echo '<br>';
echo '<br>';
//21-26
echo strpos('abc abc abc', 'b');
echo '<br>';
echo '<br>';
echo strrpos('abc abc abc', 'b');
echo '<br>';
echo '<br>';
echo strpos('abc abc abc', 'b',3);
echo '<br>';
echo '<br>';
echo strpos('aaa aaa aaa aaa aaa', ' ', 4);
echo '<br>';
echo '<br>';
if(strrpos('http://code.mu/','http://')===0) 
	{echo '+';}
	else echo '-';
	echo '<br>';
echo '<br>';
//27-29
$date = 'html css php';
	$arr = explode(' ', $date);
	var_dump($arr);
echo '<br>';
echo '<br>';
$arr = ['html', 'css', 'php'];
echo implode(',', $arr);
echo '<br>';
echo '<br>';
$date = '2022-11-18';
	$arr = explode('-', $date);
	echo $arr[2].'.'.$arr[1].'.'.$arr[0];
	echo '<br>';
echo '<br>';
//30-32
$str = '1234567890';
	
$arr = str_split($str, 2);
var_dump($arr);
echo '<br>';
echo '<br>';
$arr = str_split($str, 1);
var_dump($arr);
echo '<br>';
echo '<br>';
$arr = str_split($str, 2);
echo implode('-', $arr);
echo '<br>';
echo '<br>';
//33-35
$str = ' hfhjmg hhzaf ';
echo trim($str);
echo '<br>';
echo '<br>';
$str = '/php/';
echo trim($str, '/');
echo '<br>';
echo '<br>';
$str = 'слова слова слова.';
echo rtrim($str, '.').'.';
echo '<br>';
echo '<br>';
//36-37
$str = '12345';
echo strrev($str);
echo '<br>';
echo '<br>';
$str = 'level';
$eStr = ($str == strrev($str)) ? 'является' : 'не является';
echo $eStr;
echo '<br>';
echo '<br>';
//38-39
echo str_shuffle($str);
echo '<br>';
echo '<br>';
$str = 'abcdefghiklmnopqrstvxyz';
$s = str_shuffle($str);
echo substr($s, 0, 6);
echo '<br>';
echo '<br>';
//40
$str = '12345678';
echo number_format($str, 0, ',', ' ');
echo '<br>';
echo '<br>';
//42
for ($i = 1; $i<10; $i++){
echo str_repeat($i, $i).'<br>';
}
echo '<br>';
echo '<br>';
//43-44
$str = 'html, <b>php</b>, js';
echo strip_tags($str);
echo '<br>';
echo '<br>';
echo strip_tags($str, '<b><i>');
echo '<br>';
echo '<br>';
//46-50
echo ord('a').'<br>';
echo ord('b').'<br>';
echo ord('c').'<br>';
echo ord(' ');
echo '<br>';
echo '<br>';
echo chr(33);
echo '<br>';
echo '<br>';
$str = chr(rand(65,90));
echo $str;
echo '<br>';
echo '<br>';
$str = '';
$len = 7;
for ($i = 0; $i < $len; $i++)
	$str .= chr(rand(97,122));
echo $str;
echo '<br>';
echo '<br>';
//52-53
$str = 'ab-cd-ef';
echo strchr($str, '-');
echo '<br>';
echo '<br>';
echo strrchr($str, '-');
echo '<br>';
echo '<br>';
$str = 'ab--cd--ef';
echo strstr($str, '--');
echo '<br>';
echo '<br>';
?>