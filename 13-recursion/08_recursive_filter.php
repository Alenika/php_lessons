<?php
	declare(strict_types=1);
	
	/**
	 * Поиск шпиона
	 * date: 16.01.2026
	 */
	
	$building = [
		'Lobby' => 'Receptionist',
		'Floor_1' => [
			'Room_101' => 'Manager',
			'Room_102' => 'Accountant',
			'Storage' => [
				'Secret_Box' => 'Spy',
				'Old_Papers' => 'Dust'
			]
		],
		'Floor_2' => 'Director'
	];
	
	echo "<h3>Поиск шпиона</h3>";
	echo "<p>У нас есть многомерный массив — это здание с кучей комнат и подсобных помещений. В комнатах могут быть либо люди (строки с именами), либо другие комнаты (массивы).</p>";
	
	function findSpy(array $building, string $targetName): bool {
		
		foreach ($building as $elem) {
			if (is_array($elem)) {
				if (findSpy($elem, $targetName)) {
					return true;
				}
			} else {
				if ($elem === $targetName) {
					return true;
				}
			}
		}
		return false;
	}
	
	$target = 'Spy';
	
	echo "<h3>Поиск шпиона: {$target}</h3>";
	
	if (findSpy($building, $target)) {
		echo "Шпион пойман!";
	} else {
		echo "В здании чисто.";
	}
