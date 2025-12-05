<?php
	/*
	 * Generating an HTML Table Using Two Nested Loops in PHP
	 */

	// ⊗ppPmSFNLT
	
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
	
	echo '<table>' . PHP_EOL;
	
	foreach ($products as $product) {
		echo '<tr>' . PHP_EOL;
		foreach ($product as $key => $cell) {
			echo "<td>$cell</td>" . PHP_EOL;
		}
		echo '</tr>' . PHP_EOL;
	}
	
	echo '</table>' . PHP_EOL;
