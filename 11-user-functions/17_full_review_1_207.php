<?php
	/*
	 * ==============================================================
	 *  Основы, Массивы, Условия, Циклы, Встроенные функции
	 * ==============================================================
	 */

	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	// Задача №1: Форматирование массива цен
	
	function format_prices_array($prices) : array {
		$formatted_prices = [];
		$formatted_string = '';
		
		foreach ($prices as $price) {
			$formatted_string = number_format($price, 2, '.', '');
			$formatted_prices[] = $formatted_string . ' ₽';
			
		}
		
		return $formatted_prices;
	}
	
	print_r(format_prices_array([10.512, 99.9, 1500]));
	
	// Задача №2: Проверка пароля по правилам
	
	function check_password_strength($password) : bool {
		
		if (strlen($password) < 8) {
			return false;
		}
		
		if (stripos($password, 'password') !== false) {
			return false;
		}
		
		$has_digit = false;
		$chars = str_split($password);
		
		foreach ($chars as $char) {
			if (is_numeric($char)) {
				$has_digit = true;
				break;
			}
		}
		
		if (!$has_digit) {
			return false;
		}
		
		return true;
	}
	
	var_dump(check_password_strength('abcdefg'));
	var_dump(check_password_strength('12345678'));
	var_dump(check_password_strength('MyPass123;'));
	
	// Задача №3: Сумма чисел с удалением крайних
	
	function sum_and_remove_extremes($numbers) : float {
		if (count($numbers) < 3) {
			return 0;
		}
		
		$min_value = min($numbers);
		$max_value = max($numbers);
		
		$min_key = array_search($min_value, $numbers);
		unset($numbers[$min_key]);
		
		$max_key = array_search($max_value, $numbers);
		unset($numbers[$max_key]);
		
		return array_sum($numbers);
	}
	
	var_dump(sum_and_remove_extremes([10, 5, 20, 5, 8]));
	var_dump(sum_and_remove_extremes([1, 10, 100, 100]));
	
	// Задача №4: Анализ массива строк (Счётчик гласных)
	function count_vowels($string) {
		
		$vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я', 'a', 'e', 'i', 'o', 'u', 'y'];
		$count = 0;
		
		$lowered_string = mb_strtolower($string, 'UTF-8');
		$chars = mb_str_split($lowered_string, 1, 'UTF-8');
		
		foreach ($chars as $char) {
			if (in_array($char, $vowels)) {
				$count++;
			}
		}
		return $count;
	}
 
	
	function count_vowels_in_array($strings) {
		$result_array = [];
		
		foreach ($strings as $original_string) {
			$vowel_count = count_vowels($original_string);
			$result_array[$original_string] = $vowel_count;
		}
		
		return $result_array;
	}
	
	print_r(count_vowels_in_array(['Привет', 'Мир', 'PHP']));
	
	// Задача №5: Поиск первого счастливого числа
	// happy_number = сумма цифр делится на 7 без остатка
	
	function find_first_lucky_number($limit) {
		
		for ($number = 1; $number <= $limit; $number++) {
			$sum_of_digits = 0;
			$num_str = (string)$number;
			$chars = str_split($num_str);
			
			foreach ($chars as $char) {
				$sum_of_digits += (int)$char;
			}
			
			if ($sum_of_digits % 7 === 0) {
				return $number;
			}
		}
		
		return 0;
	}
	
	var_dump(find_first_lucky_number(10));
	var_dump(find_first_lucky_number(1));