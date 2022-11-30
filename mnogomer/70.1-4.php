<?php
//1
	$ar = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
	$sum=0;
	foreach ($ar as $sub) {
		foreach ($sub as $elem) {
			$sum += $elem;
		}
	}
echo $sum;
echo '<br>';
echo '<br>';

//2
$arr = [
	[
		[1, 2, 3],
		[6, 7, 8],
		[3, 8, 4],
		[6, 7, 9],
	],
	[
		[9, 1, 2],
		[4, 5, 6],
	],
	[
		[9, 1, 2],
		[4, 5, 6],
		[5, 6, 3],
	],
];
$s=0;
foreach ($arr as $sub) {
	foreach ($sub as $subsub) {
		foreach ($subsub as $elem) {
			$s+=$elem;
		}
	}
}
echo $s;
echo '<br>';
echo '<br>';

//3
$a = [
	[
		'name'   => 'user1',
		'age'    => 30,
		'salary' => 1000,
	],
	[
		'name'   => 'user2',
		'age'    => 31,
		'salary' => 2000,
	],
	[
		'name'   => 'user3',
		'age'    => 32,
		'salary' => 3000,
	],
];

foreach ($a as $key1 => $sub) {
	foreach ($sub as $key2 => $elem) {
		echo  $key2 . ' - ' . $elem . '<br>';
	}
	echo '<br>';

}
echo '<br>';
echo '<br>';

//4
$array = [
	'group1'  => ['user11', 'user12', 'user13', 'user43'],
	'group2'  => ['user21', 'user22', 'user23'],
	'group3'  => ['user31', 'user32', 'user33'],
	'group4'  => ['user41', 'user42', 'user43'],
	'group5'  => ['user51', 'user52'],
];
foreach ($array as $key1 => $sub) {
	foreach ($sub as $key2 => $elem) {
		echo  $key1 . ' - ' . $elem . '<br>';
	}
	echo '<br>';
}
?>