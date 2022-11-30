(<?php
//1-6
echo strtoupper('php');
echo '<br>';
echo '<br>';
echo strtolower('PHP');
echo '<br>';
echo '<br>';
echo ucfirst('london');
echo '<br>';
echo '<br>';
echo lcfirst('London');
echo '<br>';
echo '<br>';
echo ucwords('london is the capital of great britain');
echo '<br>';
echo '<br>';
echo ucfirst(strtolower('LONDON'));
//7-8
echo strlen('html css php');
echo '<br>';
echo '<br>';
$password='hjvgncdgbbvfgh';
$w=strlen($password);
if ($w > 5 and $w <10) {
	echo ('пароль подходит');
}
else{
	echo ('нужно придумать другой пароль');
}
echo '<br>';
echo '<br>';
//9-15
echo substr('html css php', 0, 4).'<br>'.substr('html css php', 5, 3).'<br>'.substr('html css php', 9);
echo '<br>';
echo '<br>';
echo substr('html css php', 0, 3).'<br>'.substr('html css php', -3, 3);
echo '<br>';
echo '<br>';
$str='html css php';
if (strlen($str) > 5){
echo substr($str, 0, 5).'...';
}
else
echo $str;
?>