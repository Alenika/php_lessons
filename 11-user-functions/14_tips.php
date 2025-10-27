<?php
	/*
	 * Советы по созданию функций в PHP
	 */

	// ⊗ppPmUFAdv
	
	/* ------------- №1 ------------- */
	
	// Исправлено: неправильное имя, дублирование кода, несколько действий в одной функции
	
	function calculate_sum($arr) {
		$sum = 0;
		
		foreach ($arr as $elem) {
			$sum += $elem;
		}
		
		return $sum;
	}
	
	// Вычисляет сред арифмет
	
	function get_average($arr) {
		$sum = calculate_sum($arr);
		
		if (empty($arr)) {
			return 0;
		}
		
		return $sum / count($arr);
	}
	
	$arr = [1, 2, 3, 4, 5];
	echo get_average($arr); // 3
	
	/* ------------- №2 ------------- */
	
	// Исправлено: неправильное имя, дублирование кода, несколько действий в одной функции
	
	function calculate_sum_ratio($arr1, $arr2) {
		$sum1 = calculate_sum($arr1);
		$sum2 = calculate_sum($arr2);
		
		if ($sum2 === 0) {
			return 'Деление на ноль';
		}
		return $sum1 / $sum2;
	}