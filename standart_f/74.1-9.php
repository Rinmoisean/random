<?php
//1
	echo pow(2, 10);
	echo '<br>';
	echo '<br>';
//2
echo sqrt(245);
echo '<br>';
echo '<br>';
//3
$arr = [4, 2, 5, 19, 13, 0, 10];
$s=0;
foreach ($arr as $elem){
$s+=pow($elem, 2);
}

echo pow($s, 1/2);
echo '<br>';
echo '<br>';
//4
$d=sqrt(379);
echo round($d).';'.round($d, 1).';'.round($d, 2);
echo '<br>';
echo '<br>';
//5
$a=[];
$b=sqrt(587);
$a['floor']= floor($b);
$a['ceil']= ceil($b);
var_dump ($a);
echo '<br>';
echo '<br>';
//6
$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr).';'.max($arr);
echo '<br>';
echo '<br>';
//7
echo mt_rand(1, 100);
echo '<br>';
echo '<br>';
//8
$ar = [];

for ($i=0; $i < 10; $i++) {
	$sluch=mt_rand();
	$ar[]=$sluch;
}
var_dump ($ar);
echo '<br>';
echo '<br>';
//9
$aa=15;
$bb=31;
$abs=abs($aa-$bb);
echo $abs;
?>
