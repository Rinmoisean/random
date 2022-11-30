<?php
//1
	$arr = [];
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 5; $j++) {
			$arr[$i][$j] = $j + 1;
			
		}
	}
	
	var_dump($arr);

	echo '<br>';
echo '<br>';

//2
$ar = [];
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 4; $j++) {
			$ar[$i][$j] = 'x';
			
		}
	}
	
	var_dump($ar);

	echo '<br>';
echo '<br>';

//3
$a = [];
	
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 2; $j++) {
		for ($t = 0; $t < 5; $t++) {
			$a[$i][$j][$t] = $t + 1;
			
		}
	}
}
	var_dump($a);

	echo '<br>';
echo '<br>';

//4

$arra = [];
	$k = 1; 
	
	for ($i = 0; $i < 4; $i++) {
		for ($j = 0; $j < 2; $j++) {
			$arra[$i][$j] = $k; 
			$k++; 
		}
	}
	
	var_dump($arra);

	echo '<br>';
echo '<br>';

//5
$array = [];
	$k = 2; 
	
	for ($i = 0; $i < 4; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$array[$i][$j] = $k; 
			$k+=2; 
		}
	}
	
	var_dump($array);

	echo '<br>';
echo '<br>';

//6

$ARR = [];
	$k=1;
	for ($i = 0; $i < 2; $i++) {
		for ($j = 0; $j < 2; $j++) {
		for ($t = 0; $t < 2; $t++) {
			$ARR[$i][$j][$t] = $k;
			$k++;
		}
	}
}
	var_dump($ARR);

	echo '<br>';
echo '<br>';


?>