<?php
	$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
    $ar = ['user1' => 30, 'user2' => 32, 'user3' => 33];    
        
    foreach ($arr as $key => $elem){
    echo $key.'-'.$elem.'<br>';
}
echo '<br>';
echo '<br>';
foreach ($ar as $key => $elem){
    echo $key.'- возраст '.$elem.' лет'.'<br>';
}
?>