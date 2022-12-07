<?php
//1
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
    function func($arr) {
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				func($elem);
			} else {
				echo $elem;
			}
		}
	}
    func([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]]);
	 echo '<br>';
echo '<br>';
//2

    function fun($arr) {
		$sum = 0;
		
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				$sum += fun($elem);
			} else {
				$sum += $elem;
			}
		}
		
		return $sum;
	}
	
	var_dump(fun([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]])); 
	echo '<br>';
echo '<br>';
//3
$arr = ['a', ['b', 'c', 'd'], ['e', 'f', 
    ['g', ['j', 'k']]]];
    function fu($arr) {
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				fu($elem);
			} else {
				echo $elem;
			}
		}
	}
    fu(['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]]);
	 echo '<br>';
echo '<br>';
//4
function f($a) {
		$length = count($a);
		
		for ($i = 0; $i < $length; $i++) {
			if (is_array($a[$i])) {
				$a[$i] = f($a[$i]);
			} else {
				$a[$i] = $a[$i]^2;
			}
		}
		
		return $a;
	}
	
	var_dump(f([1, [2, 7, 8], [3, 4], [5, [6, 7]]]));
?>