<?php
	declare(strict_types=1);
	
	/**
	 * Заполнение массивов
	 * Динамическое добавление элементов через пустые квадратные скобки
	 * ⊗ppPmArFl | 63 of 447
	 */

	// ⊗ppPmArFl - №1: Заполнение пустого массива

    $arr = [];
	
	$arr[] = 1;
	$arr[] = 2;
	$arr[] = 3;
	$arr[] = 4;
	$arr[] = 5;
	
	echo "Массив 1 (заполненный с нуля):<pre>";
	print_r($arr);
	echo "</pre><hr>";
	
	// ⊗ppPmArFl - №2: Добавление в конец существующего массива
	
	$arr = [1, 2, 3];
	
	$arr[] = 4;
	$arr[] = 5;
	
	echo "Массив 2 (добавление 4 и 5):<pre>";
	print_r($arr);
	echo "</pre><hr>";
	
	/**
	 * Как это работает с ключами
	 */
	$trickyArray = [10 => 'apple'];
	$trickyArray[] = 'banana'; // какой ключ будет у banana?
	echo "Ключ для banana: " . array_key_last($trickyArray); // 11