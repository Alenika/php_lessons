<?php
	/**
	 * Рекурсия с параметром в PHP
	 * ⊗ppPmRcEP
	 * 218 of 447
	 */
	
	declare(strict_types = 1);
	
	/* ------------- №1 ------------- */
	echo "<h3>1. Вывод элементов массива</h3>";
	
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
	
	// Используем array_shift только если массив небольшой.
	
	function printArrRecursive(array $arr): void {
		if (empty($arr)) {
			return;
		}
		
		$current = array_shift($arr);
		echo $current . " ";
		
		printArrRecursive($arr);
	}
	
	printArrRecursive($arr);
	
	/* ------------- №2 ------------- */
	function countdown($i) { // обратный отсчет с условием
		if ($i < 1) { // базовое условие
			return;
		}
		
		echo $i; // стоит до рекурс вызова, число выводится прежде чем ф-ия вызывает саму себя
		countdown($i - 1); // рекурсивный вызов, уменьш i на 1
	}
	
	countdown(3); // ф-ия начинается с 3
	// Результат 3 2 1
	
	/* ------------- №3 ------------- */
	function reverse_print($n) { // вывод в обратном порядке
		if ($n < 1) { // базовое условие
			return;
		}
		
		reverse_print($n - 1); // рекурсивный вызов (ожидание)
		echo $n; // стоит после рекурсив вызова, вывод происходит только тогда, когда ф-ия возвращается из стека
		
		// Запомнить!!! все вызовы помещаются в стек, прежде чем начинается вывод
 	}
	 
    reverse_print(3); // 1 2 3
	
	/* ------------- №4 ------------- */
	function sum_recursive($k) { // суммирование, анализ стека
		if ($k === 1) {
			return (int)1; // базовое условие
		}
		
		return $k + sum_recursive($k - 1);
	}
	
	echo sum_recursive(4); //  10

	// 4 + sum(3)
	// 3 + sum(2)
	// 2 + sum(1)
	// базовое условие 1
	// 2 + 1 = 3
	// 3 + 3 = 6
	// 4 + 6 = 10
	
	/* ------------- №5 ------------- */
	echo "<h3>5. Вывести массив в обратном порядке</h3>";
	$arr = [1, 2, 3];
	echo "Исходный массив: ";
	print_r($arr);
	
	function printReverse(array $arr): void {
		if (empty($arr)) {
			return;
		}
		
		$last = array_pop($arr);
		echo $last . " ";
		
		printReverse($arr);
	}
	
	echo "<br>";
	printReverse($arr);
	
	/* ------------- №6 ------------- */
	echo "<h3>6. Сумма элементов массива (рекурсивно)</h3>";
	
	$numbersForSum = [1, 2, 3, 4, 5];
	
	function getRecursiveSum(array $arr): int {
		if (empty($arr)) {
			return 0;
		}
		
		$first = array_shift($arr);
		
		return $first + getRecursiveSum($arr);
	}
	
	$total = getRecursiveSum($numbersForSum);
	echo "Сумма массива: " . $total;