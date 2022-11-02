<?php
$num = 40;
$i = 0;
	
	while ($num < 1000) {
		$num = $num * 3;
		$i++;
	}
	
echo $num.'<br>';
echo 'количество итераций: '.$i;

echo '<br>';
echo '<br>';


	for ($n = 30, $ii = 0; $n < 1000; $n = $n * 3, 
		$ii++); 
	echo $n . ' ' . $ii;



?>


