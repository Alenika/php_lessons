<?php
	declare(strict_types=1);
	
	/**
	 * Цензура в чате
	 * date: 16.01.2026
	 */

	echo "<p>У нас есть многомерный массив сообщений из чата. Нам нужно пройтись по всему массиву и заменить слово 'блин' (или любое другое плохое слово) на смайлик [цензура].</p>";
	
	$chatMessages = [
		"Привет, как дела?",
		"Все блин отлично!",
		"Admin_Panel" => [
			"User1" => "Ты блин забанен",
			"User2" => "Ой, извините",
			"Support_Chat" => [
				"Tech" => "Тут блин баг какой-то",
				"Manager" => "Исправим!"
			]
		],
		"Пока, блин!"
	];
	
	function censorMessages(array $messages): array
	{
		foreach ($messages as $key => $value) {
			if (is_array($value)) {
				$messages[$key] = censorMessages($value);
			} else {
					$messages[$key] = str_replace('блин', '[цензура]', $value);
				}
			}
		
		return $messages;
	}
	
	$cleanMessages = censorMessages($chatMessages);
	
	echo "<h3>Результат цензуры:</h3>";
	echo "<pre>";
	print_r($cleanMessages);
	echo "</pre>";