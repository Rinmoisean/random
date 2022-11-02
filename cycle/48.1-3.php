<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
    $ar = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $res=0;
    $result=0;

    foreach ($arr as $elem) {
		echo $elem . '<br>';
	}
    echo '<br>';
    echo '<br>';

    foreach ($ar as $elem) {
		$res += $elem;
	}
	
	echo $res;
    echo '<br>';
    echo '<br>';

    foreach ($ar as $elem) {
		$result += $elem;
	}
	$result = $result/9;
	echo $result;
?>