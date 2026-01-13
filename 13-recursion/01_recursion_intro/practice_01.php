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
	
	
	
