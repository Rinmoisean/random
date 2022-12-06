<?php
//1
    $arr = [1, 3, 10, 12, -7, 54];
echo array_sum($arr)/count($arr);
//2
$sum = 0;
$i = 1;
 
    do
    {
    $sum = $sum + $i;
    $i++;
    }
    while($i <= 100);
 
echo"Сумма всех чисел от 1 до 100 равна $sum"; 
echo '<br>';
//3
$a = 1;
	while ($a <= 100) {
		echo $a . '<br>';
		$a++;
	}
	echo '<br>';
//4
$arr = array_fill(0, 10, 'x');
	var_dump($arr);
	echo '<br>';
//5
$arr = range(1, 10);
	shuffle($arr);
	var_dump($arr);
	echo '<br>';
//6
$num = 144; 
	$arr = range(1, $num);
	echo array_product($arr);
	echo '<br>';
//7
$num = 273465278;
echo array_sum(str_split(abs($num), 1));
echo '<br>';
//8
$str = 'paradise';
	$str = strrev($str);
	$str = ucfirst($str);
	$str = strrev($str);
	echo $str;
	echo '<br>';
//9
$arr = [61, 14, -5, 7, 151];
	$result = array_map('sqrt', $arr);
	var_dump($result);
	echo '<br>';
//10
$keys = range('a', 'z');
	$elems = range(1, 26);
	$arr = array_combine($keys, $elems);
	var_dump($arr);
	echo '<br>';
//11
 $n = 1234567890;
 echo array_sum(str_split($n));
 echo '<br>';
 //12
 $str = '1234567890';
	$arr = str_split($str, 2);
	$result = array_sum($arr);
	echo $result;
	echo '<br>';

?>
