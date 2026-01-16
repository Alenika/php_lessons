<?php
	/**
	 * Манипуляции с элементами многомерного массива в PHP
	 * ⊗ppPmRcMAM
	 */
	
	/* ------------- №1: Возведение в квадрат ------------- */
	echo "<h3>Рекурсивно возводит все числа в многомерном массиве в квадрат</h3>";
	
	$data = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
	
	function squareElementsRecursive(array $arr): array {
		$length = count($arr);
		
		for ($i = 0; $i < $length; $i++) {
			if (is_array($arr[$i])) {
				$arr[$i] = squareElementsRecursive($arr[$i]);
			} else {
				$arr[$i] = pow($arr[$i], 2);
			}
		}
		
		return $arr;
	}
	
	$result = squareElementsRecursive($data);
	
	echo "<pre>";
	print_r($result);
	echo "</pre>";
