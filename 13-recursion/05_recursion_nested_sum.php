<?php
	/*
	 * Сумма элементов массива в PHP
	 */

	// ⊗ppPmRcMAS
	
	/* ------------- №1 ------------- */
	$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
	
	function get_sum($array) {
		$sum = 0;
		
		foreach ($array as $elem) {
			if (is_array($elem)) {
				$sum += get_sum($elem);
			} else {
				$sum += $elem;
			}
		}
		
		return $sum;
	}
	
	var_dump(get_sum($arr));
	
	/* ------------- №2 ------------- */
	$arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
	
	function merge_to_string($array) {
		$result = '';
		
		foreach ($array as $elem) {
			if (is_array($elem)) {
				$result .= merge_to_string($elem);
			} else {
				$result .= $elem;
			}
		}
		
		return $result;
	}
	
	echo merge_to_string($arr);