<?php
	/*
	 * Сумма элементов массива при рекурсии в PHP
	 */

	// ⊗ppPmRcAS
	
	/* ------------- №1 ------------- */
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
	
	function get_sum($array) {
		$sum = array_shift($array);
		
		if (count($array) !== 0) {
			$sum += get_sum($array);
		}
		
		return $sum;
	}
	
	var_dump(get_sum($arr));
