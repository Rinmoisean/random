<?php
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
echo $arr[3] [2];
echo $arr[1] [1];
echo $arr[2] [0];
echo $arr[0] [0];

$ar = [[1, 2], [3, 4], [5, 6]];
$i=0;
$ii=0;
$s=0;
if ($i != 3){
	$s += $ar[$i][$ii];
	$i++;}
	if ($ii != 3){
		$s += $ar[$i][$ii];
	$ii++;
}
echo $s;
?>
