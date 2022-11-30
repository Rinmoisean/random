<?php
//1
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
	//2
	$products[] = [
		'name'   => 'орехи',
		'price'    => 400,
		'amount' => 8,
	];
	//1-2
	foreach ($products as $product) {
		echo $product['name'] . ': (' .$product['amount'] . ') '. $product['price'] . '$ ' . '<br>';
	}

	
?>