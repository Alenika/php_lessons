<?php
	/*
	 * Логические операторы без if в функциях PHP
	 */

	// ⊗ppPmUFLO
	
	/* ------------- №1 ------------- */
	function func($a, $b) {
		return  $a === $b;
	}
	var_dump(func(5, 5)); // bool(true)
	var_dump(func(5, 4)); // bool(false)
	
	/* ------------- №2 ------------- */
	function func2($a, $b) {
		return $a !== $b;
	}
	var_dump(func2(5, 5)); // bool(false)
	var_dump(func2(5, 6)); // bool(true)
	
	/* ------------- №3 ------------- */
	function func3($a, $b) {
		return $a + $b >= 10;
	}
	var_dump(func3(5, 5)); // bool(true)
	var_dump(func3(3, 4)); // bool(false)
	
	/* ------------- №4 ------------- */
	function func4($num) {
		return $num >= 0;
	}
	var_dump(func4(10));  // bool(true)
	var_dump(func4(-5)); // bool(false)