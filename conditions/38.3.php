<?php
	$a = 22;
    $b = 3;
    $rest = $a % $b;
	
	if ($rest === 0) {
		echo 'число четное';
	} else {
		echo 'число нечетное, остаток ='.$rest;
	}
?>