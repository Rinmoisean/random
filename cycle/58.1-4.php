<?php
	$str = '';
	
	for ($i = 0; $i < 5; $i++) {
		$str .= '0';
	}
	
	echo $str;

	echo '<br>';
	echo '<br>';

	$str2 = '';

	for ($i = 1; $i <= 9; $i++) {
		$str2 = $str2 . $i;
	}

	echo $str2;

	echo '<br>';
        echo '<br>';

	$str3 = '';

        for ($i = 9; $i >= 1; $i--) {
                $str3 = $str3 . $i;
	}
	echo $str3;

	  echo '<br>';
        echo '<br>';
 $str4 = '-';

        for ($i = 1; $i <= 9; $i++) {
                $str4 = $str4 . $i . '-';
        }
        echo $str4;


?>
