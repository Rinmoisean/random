<?php
	$arr = [1, 2, 3, 4, 5];
    $ar = [2, 5, 9, 15, 1, 4];
    $a = [10, 20, 30, 50, 235, 3000];
    $array = [1 => 'пн',2 => 'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс'];
    $day = 3;
    $res=0;
	
	foreach ($arr as $elem) {
		if ($elem % 2 == 1) {
			echo $elem.'  ';
		}
	}
    echo '<br>';
    echo '<br>';

    foreach ($ar as $elem) {
		if ($elem > 3 and $elem < 10) {
			echo $elem.'  ';
		}
	}
    echo '<br>';
    echo '<br>';

    foreach ($ar as $elem) {
		if ($elem % 2 == 0) {
            $res+=$elem;	
		}  
	}
    echo $res.'  ';
    echo '<br>';
    echo '<br>';

    foreach($ar as $elem){
        $elem=(string) $elem;
        if($elem[0]==1 or $elem[0]==2 or $elem[0]==5){
            echo $elem.' ';
        } 
	}
    echo '<br>';
    echo '<br>';

    foreach($array as $elem){
        if($elem != 'сб' and $elem != 'вс'){
            echo $elem.' ';
        } 
        else {
            echo '<b>' .$elem.' '.'</b>';
        }
	}
    echo '<br>';
    echo '<br>';

    foreach($array as $key => $elem){
        if($key == $day) {
            echo '<i>'.$elem.'</i>';
        } 
	}
?>