<?php
	/*
	 * Практика на функции PHP
	 */
	
	// ⊗ppPmUFPrm
	
	/* ------------- №1 ------------- */
	function get_divisors($num) {
		$arr = [];
		for ($i = 1; $i <= $num; $i++) {
			if ($num % $i === 0) {
				$arr[] = $i;
			}
		}
		return $arr;
	}
	
	print_r(get_divisors(2)); // [0] => 1  [1] => 2
	print_r(get_divisors(3)); // [0] => 1  [1] => 3
	
	/* ------------- №2 ------------- */
	function common_divisors($num1, $num2) {
		return array_intersect(get_divisors($num1, $num2), get_divisors($num2));
	}
	
	print_r(common_divisors(10, 20)); // [0] => 1 [1] => 2 [2] => 5 [3] => 10
	
	/* ------------- №3 ------------- */
	function calculate_digit_sum($num) {
		$sum = 0;
		$str_number = (string)abs($num);
		
		for ($i = 0; $i < strlen($str_number); $i++) {
			$sum += (int)$str_number[$i];
		}
		return $sum;
	}
	
	print_r(calculate_digit_sum(150)); // 6
	
	/* ------------- №4 ------------- */
	function get_current_date() {
		$day_number = date('N');
		
		$days = [
			1=>'понедельник',
		    2=>'вторник',
			3=>'среда',
			4=>'четверг',
			5=>'пятница',
			6=>'суббота',
			7=>'воскресенье'
		];
		
		return $days[$day_number];
	}
	
	echo get_current_date();
	
	/* ------------- №5 ------------- */
	function get_current_date_word($date) {
		$timestamp = strtotime($date);
		$day_number = date('N', $timestamp);
		
		$days = [
			1=>'понедельник',
			2=>'вторник',
			3=>'среда',
			4=>'четверг',
			5=>'пятница',
			6=>'суббота',
			7=>'воскресенье'
		];
		
		return $days[$day_number]; // понедельник
	}
	
	echo get_current_date_word('2025-10-27');
	
	/* ------------- №6 ------------- */
	function calculate_days_from_sec($seconds) {
		$seconds_in_day = 86400;
		return floor($seconds / $seconds_in_day);
	}
	
	echo calculate_days_from_sec('100000');
	
	/* ------------- №7 ------------- */
	function is_leap($year) {
		if ($year % 400 === 0) {
			return true;
		}
		
		if ($year % 100 === 0) {
			return false;
		}
		
		if ($year % 4 === 0) {
			return true;
		}
		
		return false;
	}
	
	var_dump(is_leap(2024));
	var_dump(is_leap(1900));
	var_dump(is_leap(2000));
	
	


