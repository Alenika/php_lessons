<?php
	/*
	 * Массив ассоциативных массивов в PHP
	 */

	// ⊗ppPmMdAOA
	
	/* ---------- №1 ---------- */
	
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
	
	foreach ($products as $item) {
		echo $item['name'] . ' - ' . $item['price'] . ' - ' . $item['amount'] . '<br>';
	}
