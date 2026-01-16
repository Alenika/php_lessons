<?php
	/**
	 * Сумма элементов массива при рекурсии в PHP
	 * ⊗ppPmRcAS
	 */
	
	declare(strict_types=1);
	
	/* ------------- №1 ------------- */
	echo "<h3>1. Сумма элементов массива при рекурсии в PHP.</h3>";
	
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
	
	function getSum($array) {
		$sum = array_shift($array);
		
		if (count($array) !== 0) {
			$sum += getSum($array);
		}
		
		return $sum;
	}
	
	var_dump(getSum($arr));
