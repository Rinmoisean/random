<?php
$arr = [1, 2, 3, 0,  4, 5, -8, 7];
$sum = 0;

        foreach ($arr as $elem) {
                if ($elem == 0) {
                        echo 'есть';
                        break;
                }
        }
echo '<br>';
        foreach ($arr as $elem) {
                if ($elem >= 0 ) {
                        $sum += $elem;
                        echo $sum;
                
                break;
		}
        }
echo '<br>';
        foreach ($arr as $key =>  $elem) {
                if ($elem == 3) {
                        echo $key;
                        break;
                }
        }
?>
