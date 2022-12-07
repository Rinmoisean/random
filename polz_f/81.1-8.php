<?php
//1
	function f($num) {
		return $num * $num * $num;
	}
	echo f(3); 
	echo '<br>';
		  echo '<br>';
//2
function fu($num) {
		return sqrt($num); 
        return sqrt($num);
	}
	
	$result = fu(3) + fu(4);
	echo $result; 
echo '<br>';
		  echo '<br>';
//3 - выведется "3"
//4 - выведется "100", "5"
//5 - выведется "100", "5"
//6 - выведется "1"
//8
function fun($num1, $num2) {
		if ($num1 > 0 and $num2 > 0) {
			return $num1 * $num2;
		} else { 
			return $num1 - $num2;
		}
	}
	
	echo fun(3, 4);
	?>