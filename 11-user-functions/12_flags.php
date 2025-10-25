<?php
	/*
	 * Флаги в функциях PHP
	 */

	// ⊗ppPmUFFl
	
	/* ------------- №1 ------------- */
	function are_all_even($arr) {
		foreach ($arr as $elem) {
			if ($elem % 2 !== 0) {
				return false;
			}
		}
		
		return true;
	}
	
	var_dump(are_all_even([2, 4, 6, 8])); // bool(true)
	var_dump(are_all_even([2, 4, 6, 9])); // bool(false)
	
	/* ------------- №2 ------------- */
	function are_all_digits_odd($num) {
		$str_to_num = (string)$num;
		
		for ($i = 0; $i < strlen($str_to_num); $i++) {
			$digit = (int)$str_to_num[$i];
			
			if ($digit % 2 === 0) {
				return false;
			}
		}
		
		return true;
	}
	
	var_dump(are_all_digits_odd(13579)); // bool(true)
	var_dump(are_all_digits_odd(12345)); // bool(false)
	
	/* ------------- №3 ------------- */
	function has_consec_duplicates($arr)
	{
		for ($i = 1; $i < count($arr); $i++) {
			if ($arr[$i] === $arr[$i - 1]) {
				return true;
			}
		}
		
		return false;
	}
	var_dump(has_consec_duplicates([1, 2, 2, 3, 4])); // bool(true)
	var_dump(has_consec_duplicates([1, 2, 3, 2, 4])); // bool(false)
