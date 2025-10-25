<?php
	/*
	 * The Return Statement in PHP
	 */

	// ⊗ppPmUFRt
	
	/* ------------- №1 ------------- */
	function calculate_cube($number) {
		return $number ** 3;
	}
	$res = calculate_cube(3);
	echo $res . PHP_EOL; // 27
	
	/* ------------- №2 ------------- */
	$res = calculate_cube(2) + calculate_cube(3);
	echo $res . PHP_EOL; // 35
