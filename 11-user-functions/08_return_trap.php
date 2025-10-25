<?php
	/*
	 * The Subtle Point of Return in PHP
	 */

	// ⊗ppPmUFRN
	
	/* ------------- №1 ------------- */
	function func8_1($num) {
		return $num; // выполнение функции прекращается
		
		$res = $num * $num; // этот код не будет выполнен
		return $res;
	}
	
	echo func8_1(3); // 3
	
	/* ------------- №2 ------------- */
	function func8_2($num) {
		if ($num <= 0) {
			return abs($num); // возвращает абсолютное значение
		} else {
			return $num * $num; // возвращает квадрат
		}
	}
	
	echo func8_2(10); // 100 - выполняется блок else
	echo func8_2(-5); // 5 - выполняется блок if
	
	/* ------------- №3 ------------- */
	function func($num) {
		if ($num <= 0) {
			return abs($num); // выполнится, если условие if было true
		}
		
		return $num * $num; // выполнится, если условие if было false
	}
	
	echo func(10); // 100
	echo func(-5); // 5