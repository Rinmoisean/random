<?php
require_once 'car1.1.php';

$x = new Car;
$x->marka = 'BMW';
$x ->color = 'black';

echo $x->marka.' '.$x->color .'<br>';
$x->go();
$x->turn();
$x->stop();
?>