<?php
	/*
	 * Inserting Multidimensional Array Elements in a Loop in PHP
	 */

	// ⊗ppPmSFLMArI
	
	/* ------------- №1 ------------- */
	$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];
	
	foreach ($products as $product) {
		echo "{$product['name']}: {$product['price']} рублей, количество - {$product['amount']}" . PHP_EOL;
	}