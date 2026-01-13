<?php
	/**
	 * Практика: Простые задачи по рекурсии
	 *
	 * @date    13.01.2026
	 */
	
	declare(strict_types = 1); // строгая типизация
	
	echo "<h4>1. Обратный отсчет</h4>";
	
	function countDown(int $n): void {
		echo $n . " ";
		
		if ($n <= 1) {
			echo "Поехали!";
			return; // просто выходим из функции
		}
		
		countDown($n - 1);
	}
 
	countdown(3);
	
	
	echo "<h4>2. Четные числа от 2 до N</h4>";
	
	function printEvens(int $n): void {
		
		if ($n < 2) {
			return;
		}
		
		printEvens($n - 1);
		
		if ($n % 2 === 0) {
			echo $n . " ";
			
		}
	}
	
	printEvens(10);
	
	
	echo "<h4>3. Факториал числа</h4>";
	// Произведение всех чисел от 1 до n
	
	function factorial(int $n): int {
		
		if ($n <= 1) {
			return 1;
		}
		
		return $n * factorial($n - 1);
	}
	
	echo factorial(5);
	
	
	echo "<h4>4. Длина строки</h4>";
	
	function myStrLen(string $str): int {
		if ($str === "") {
			return 0;
		}
		
		$remainder = mb_substr($str, 1);
		
		return 1 + myStrLen($remainder);
	}
	
	echo "Длина строки: " . myStrLen("Hello");
	
	
	echo "<h4>5. Сумма цифр числа</h4>";
	
	function sumDigits(int $n): int {
		if ($n === 0) {
			return 0;
		}
		
		$lastDigit = $n % 10;
		
		$remainingPart = (int)($n / 10);
		
		return $lastDigit + sumDigits($remainingPart);
	}
 
	echo "Сумма цифр числа 123: " . sumDigits(123);
	echo "<br>";
	echo "Сумма цифр числа 505: " . sumDigits(505);
	
	
