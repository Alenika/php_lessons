<?php
	declare(strict_types=1);
	
	/**
	 * Ключи из переменных в PHP
	 * Динамический доступ к элементам массива
	 * ⊗ppPmArVK | 65 of 447
	 */
	
	// --- Теория ---
	$letters = ['a', 'b', 'c'];
	$index = 2;
	echo "Элемент под индексом {$letters[$index]} " . $letters[$index];
	echo "<hr>";
	
	/**
	 * ПРАКТИКА
	 */
	
	// ⊗ppPmArVK №1: Сумма элементов по ключам из переменных
	$arr = [1, 2, 3, 4, 5];
	$key1 = 1;
	$key2 = 2;
	
	$sum = $arr[$key1] + $arr[$key2];
	echo "Сумма элементов с ключами {$key1} и {$key2} равна: {$sum}";
	echo "<br>";
	
	// ⊗ppPmArVK №2: Ассоциативный доступ через переменную
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
		];
	
	$key = 'b';
	
	echo "Элемент с ключом '{$key}': " . $arr[$key];
