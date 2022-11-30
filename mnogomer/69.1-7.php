<?php
// 1
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
echo $arr[3] [2];
echo $arr[1] [1];
echo $arr[2] [0];
echo $arr[0] [0];

echo '<br>';
echo '<br>';
// 2
$ar = [[1, 2], [3, 4], [5, 6]];
$s=0;
for ($i = 0; $i < 3; $i++) {
	for ($ii = 0; $ii < 2; $ii++){
		$s += $ar[$i][$ii];
	
}
}
echo $s;

echo '<br>';
echo '<br>';

// 3
$a = [
	[
		[1, 2],
		[3, 4],
	],
	[
		[5, 6],
		[7, 8],
	],
];

$su=0;
	
	for ($i = 0; $i < 2; $i++) {
		for ($ii = 0; $ii < 2; $ii++){
			for ($iii = 0; $iii < 2; $iii++){
			$su += $a[$i][$ii][$iii];
	
		}
	}
}
echo $su;

echo '<br>';
echo '<br>';

 // 4
 $arra = [
	'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
	'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
];

echo $arra['boys'][1].'<br>';
echo $arra['girls'][2];

echo '<br>';
echo '<br>';

// 5
$array = [
	'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
	'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];

echo $array['en'][2];
echo '<br>';
echo '<br>';

// 6
$ARR = [
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
	$c=0;
	$c= $ARR[0]['salary']+$ARR[2]['salary'];
	echo $c;
	echo '<br>';
echo '<br>';
	
	// 7

	$arr = [
		[
			1, 2, 3, [4, 5, [6, 7]]
		], 
		[
			8, [9, 10]
			]
		];

	?>