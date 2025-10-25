<?php
	/*
	 * Loop and Return in PHP
	 */

	// ⊗ppPmUFRL
	
	/* ------------- №1 ------------- */
	function func($num) {
		$sum = 0;
		
		for ($i = 1; $i <= $num; $i++) {
			$sum += $i; // цикл выполнится только 1 раз
			return $sum; // немедленно завершает работу при i = 1
		}
	}
	
	echo func(5); // 1

	// Автор хотел получить сумму чисел от 1 до num
	// Нужно вынести return за пределы цикла
	
	function func9_1($num) {
		$sum = 0;
		
		for ($i = 1; $i <= $num; $i++) {
			$sum += $i;
		}
		
		return $sum;
	}
	
	echo func9_1(5); // 15
