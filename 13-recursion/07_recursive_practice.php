<?php
	declare(strict_types=1);
	
	/**
	 * Практика по рекурсии
	 * date: 16.01.2026
	 */
	
	/* --- Подсчет стоимости корзины --- */
	
	echo "<h3>Подсчет стоимости корзины</h3>";
	
	$cart = [
		'iPhone' => 1000,
		'Case'   => 20,
		'Bundle_Summer' => [
			'AirPods' => 200,
			'Powerbank' => 50,
			'Special_Gift_Box' => [
				'Stickers' => 5,
				'Keychain' => 10
			]
		],
		'iPad' => 800
	];
	
	function calculateTotalCost(array $basket): int {
		$total = 0;
		
		foreach ($basket as $elem) {
			if (is_array($elem)) {
				$total += calculateTotalCost($elem); // рекурсивное сложение
			} else {
				$total += $elem;
			}
		}
		return $total;
	}
	
	echo "Общая стоимость заказа: " . calculateTotalCost($cart);
	
	
	
