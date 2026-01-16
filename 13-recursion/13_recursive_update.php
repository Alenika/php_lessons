<?php
	declare(strict_types=1);
	
	/**
	 * Увеличение цен в меню на 10%
	 * date: 16.01.2026
	 */
	
	$menu = [
		'pizza' => 500,
		'pasta' => 400,
		'drinks' => [
			'cola' => 100,
			'water' => 50,
			'alcohol' => [
				'wine' => 1000,
				'beer' => 300
			]
		]
	];
	
	function applyTax(array $items): array
	{
		foreach ($items as $key => $item) {
			if (is_array($item)) {
				$items[$key] = applyTax($item); // !!! записываем по ключу
			} else {
				if (is_numeric($item)) {
					$items[$key] *= 1.10; // !!! меняем по ключу
				}
			}
		}
		return $items;
	}
	
	$updatedMenu = applyTax($menu);
	
	echo "<h3>Меню с учетом налога (10%):</h3>";
	echo "<pre>";
	print_r($updatedMenu);
	echo "</pre>";