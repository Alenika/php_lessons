<?php
	/*
	 * Манипуляции с элементами многомерного массива в PHP
	 */

	// ⊗ppPmRcMAM

	// №1
	
	$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
	
	function square_elements($arr) {
		$length = count($arr);
		
		for ($i = 0; $i < $length; $i++) {
			if (is_array($arr[$i])) {
				$arr[$i] = square_elements($arr[$i]);
			} else {
				$arr[$i] = pow($arr[$i], 2);
			}
		}
		
		return $arr;
	}
	
	print_r(square_elements($arr));
