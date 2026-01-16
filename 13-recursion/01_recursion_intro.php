<?php
	/**
	 * Работа с рекурсией в PHP
	 * ⊗ppPmRcInr
	 * 217 of 447
	 */
	declare(strict_types=1);
	
	echo "<h2>Введение в рекурсию</h2>";
	
	/* ------------- №1: Диапазон чисел ------------- */
	echo "<h4>1. Числа от 1 до 10</h4>";
	
	// global считается "плохим тоном"
	
	function printNumbers(int $current, int $max): void {
		echo $current . " ";
		
		if ($current < $max) {
			printNumbers($current + 1, $max);
		}
	}
	
	printNumbers(1, 10);
	
	/* ------------- №2: Последовательность ------------- */
	echo "<h4>2. Последовательность 12345</h4>";
	
	function printSequence(int $num): void {
		echo $num;
		
		if ($num < 5) {
			printSequence($num + 1); // рекурсивный вызов
		}
	}
	
	printSequence(1);
	
	/* ------------- №3: Реверс строки ------------- */
	echo "<h4>3. Реверс строки 'Hello'</h4>";
	
	// отделяем первый символ и приклеиваем его В КОНЕЦ результата рекурсии
	
	function reverseString(string $str): string {
		if ($str === "") {
			return ""; // базовый случай, строка пустая - возвращаем ее
		}
		
		$remaining = substr($str, 1);
		$firstChar = substr($str, 0, 1);
		
		return reverseString($remaining) . $firstChar;
	}
	
	echo "Результат: " . reverseString("Hello");
	
	/* ------------- №4: Сумма до N ------------- */
	echo "<h4>4. Сумма чисел до N (например, до 4):</h4>";
	
	function calculateSumtoN(int $n): int {
		// базовый случай: когда дошли до 1
		if ($n === 1) {
			return 1;
		}
		
		return $n + calculateSumtoN(($n - 1));
	}
	
	$target = 4;
	echo "Сумма от 1 до $target: " . calculateSumtoN($target);