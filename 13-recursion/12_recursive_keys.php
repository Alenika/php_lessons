<?php
	declare(strict_types=1);
	
	/**
	 * Перевод всех строк в верхний регистр
	 * date: 16.01.2026
	 */
	
	$universityData = [
		'name' => 'ivan',
		'status' => 'student',
		'info' => [
			'city' => 'moscow',
			'hobby' => 'coding'
		]
	];
	
	function makeUpperCase(array $data): array
	{
		foreach ($data as $key => $value) {
			if (is_array($value)) {
				$data[$key] = makeUpperCase($value);
			} else {
				$data[$key] = mb_strtoupper($value);
			}
		}
		
		return $data;
	}
	
	$result = makeUpperCase($universityData);
	
	echo "<h3>Результат трансформации:</h3>";
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	
	
