<?php
	/*
	 * Основы работы с пользовательскими функциями в PHP
	 */

	// ⊗ppPmUFInr
	
	/* ------------- №1 ------------- */
	function print_my_name () {
		echo 'Елена' . PHP_EOL;
	}
	print_my_name(); // Елена
	
	/* ------------- №2 ------------- */
	function print_sum_1_100 () {
		$sum = 0;
		for ($i = 0; $i < 100; $i++) {
			$sum += $i;
		}
		echo $sum . PHP_EOL;
	}
	print_sum_1_100(); // 4950