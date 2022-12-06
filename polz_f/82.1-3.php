<?php
//1
	function getSquareSum($arr) {
		$sum = 0;
		
		foreach ($arr as $elem) {
			$sum += pow( $elem);
		}
		
		return $sum;
	}

	func();
//2

function getDivisors($num) {
	$i=0;
	$result = [];
	foreach ($num as $i) {
		$i++;
if($num % $i == 0)
array_push($result, $i);
return $result;
}
}
func();
//3
function delElem($arr, $num){
	$arr=[];
	foreach($arr as $elem){
		if ($elem === $num) {
		echo $elem;
		}
	}
	return arr;
}
func();
?>