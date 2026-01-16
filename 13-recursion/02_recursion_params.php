<?php
	/**
	 * Рекурсия с параметром в PHP
	 * ⊗ppPmRcEP
	 * 218 of 447
	 */
	
	declare(strict_types = 1);
	
	/* ------------- №1: Прямой вывод элементов массива ------------- */
	echo "<h3>1. Вывод элементов массива</h3>";
	
	$data = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
	
	// Используем array_shift только если массив небольшой.
	
	function printArrRecursive(array $arr): void {
		if (empty($arr)) {
			return;
		}
		
		$current = array_shift($arr);
		echo $current . " ";
		
		printArrRecursive($arr);
	}
	
	printArrRecursive($data);
	
	/* ------------- №2: Обратный отсчет (Сверху вниз) ------------- */
	echo "<h3>2. Обратный отсчет</h3>";
	
	function printCountdown(int $i): void {
		if ($i < 1) { // базовое условие
			return;
		}
		
		echo $i; // вызов ДО рекурс вызова, число выводится прежде чем ф-ия вызывает саму себя
		printCountdown($i - 1); // рекурсивный вызов, уменьш i на 1
	}
	
	printCountdown(3); // ф-ия начинается с 3
	// Результат 3 2 1
	
	/* ----------- №3: Вывод по возрастанию (Снизу вверх) ----------- */
	echo "<h3>3. Вывод по возрастанию (Анализ стека)</h3>";
	
	function printIncreasing(int $n): void {
		if ($n < 1) { // базовое условие
			return;
		}
		
		printIncreasing($n - 1); // уходим вглубь стека
		echo $n; // стоит ПОСЛЕ рекурсив вызова, вывод происходит только тогда, когда ф-ия возвращается из стека
		
		// Запомнить!!! все вызовы помещаются в стек, прежде чем начинается вывод
 	}
	
	printIncreasing(3); // 1 2 3
	
	/* ------------- №4: Рекурсивная сумма чисел ------------- */
	echo "<h3>4. Сумма чисел от 1 до K</h3>";
	
	function calculateSum(int $k): int {
		if ($k === 1) {
			return 1;
		}
		
		return $k + calculateSum($k - 1);
	}
	
	echo "Сумма (4): " . calculateSum(4); // Результат: 10

	// 4 + sum(3)
	// 3 + sum(2)
	// 2 + sum(1)
	// базовое условие 1
	// 2 + 1 = 3
	// 3 + 3 = 6
	// 4 + 6 = 10
	
	/* ------------- №5: Массив в обратном порядке ------------- */
	echo "<h3>5. Массив в обратном порядке</h3>";
	$numbers = [1, 2, 3];
	echo "Исходный массив: ";
	print_r($numbers);
	
	function printArrayReverse(array $arr): void {
		if (empty($arr)) {
			return;
		}
		
		$last = array_pop($arr); // забираем с конца
		echo $last . " ";
		
		printArrayReverse($arr);
	}
	
	echo "<br>";
	printArrayReverse($numbers);
	
	/* ------------- №6: Сумма элементов массива ------------- */
	echo "<h3>6. Сумма элементов массива (рекурсивно)</h3>";
	
	$sourceArray = [1, 2, 3, 4, 5];
	
	function getRecursiveSum(array $arr): int {
		if (empty($arr)) {
			return 0;
		}
		
		$first = array_shift($arr);
		
		return $first + getRecursiveSum($arr);
	}
	
	echo "Сумма массива: " . getRecursiveSum($sourceArray);
	// Результат: 15