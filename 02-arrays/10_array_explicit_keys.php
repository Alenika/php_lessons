<?php
	declare(strict_types=1);
	
	/**
	 * Явное указание ключей
	 * Заполнение массива по конкретным индексам и строковым ключам
	 * ⊗ppPmArEAK | 64 of 447
	 */
	
	// 1. Явное указание числовых ключей
	$chars = [];
	$chars[0] = 'a';
	$chars[1] = 'b';
	$chars[2] = 'c';
	
	echo "Массив с числовыми ключами:<pre>";
	print_r($chars);
	echo "</pre><hr>";
	
	/**
	 * ПРАКТИКА
	 */
	
	// ⊗ppPmArEAK №1: Массив даты
	// В ключ 'year' запишите текущий год, в ключ 'month' - текущий месяц, а в ключ 'day' - текущий день.

	$date = [];
	$date['year'] = 2025;
	$date['month'] = 9;
	$date['day'] = 23;
	
	echo "Массив текущей даты:<pre>";
	print_r($date);
	echo "</pre>";
	
	echo "<p>Сегодня: {$date['day']}.{$date['month']}.{$date['year']}</p>";