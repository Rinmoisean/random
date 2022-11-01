<?php
$day = 18;
$dec = 0;
if ($day > 0 and $day <= 10) {
    echo 'Первая декада месяца';
} 
elseif ($day > 10 and $day <= 20) {
    echo 'Вторая декада месяца';
} 
elseif ($day > 20 and $day <= 30){  
    echo 'Третья декада месяца';
}
else {
    echo 'неверное значение';
}
?>