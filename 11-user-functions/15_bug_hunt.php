<?php
	/*
	 * Поиск ошибок в коде
	 */

	// ⊗ppPmUFMst
	
	/* ------------- №1 ------------- */
	function func1() {
		return 3; // return для возврата значения
	}
	function func2() {
		return 5; // return для возврата значения
	}
	
	echo func1() + func2(); // 8
	
	/* ------------- №2 ------------- */
	function calculate_sum_array($arr) {
		$res = 0;
		
		foreach ($arr as $elem) {
			$res += $elem;
		}
		
		return $res; // return должен быть вне цикла
	}
	
	echo calculate_sum_array([1, 2, 3, 4, 5]); // 15
	
	/* ------------- №3 ------------- */
	$arr = [1, 2, 3, 4, 5];
	
	function print_array_sum($arr) {
		$res = 0;
		
		foreach ($arr as $elem) {
			$res += $elem;
		}
		
		echo $res;
	}
	
	// Нужно вызвать функцию
		print_array_sum($arr); // 15
	
	/* ------------- №4 ------------- */
	function func11() {
		return 3;
	}
	function func22() {
		return 5;
	}
	
	// скобки забыты
	echo func11() + func22(); // 8
	
	/* ------------- №5 ------------- */
	function sum($arr) {
		$sum = 0;
		
		foreach ($arr as $elem) {
			$sum += $elem;
		}
		
		return $sum;
	}
	// сначала определение, затем вызов функц
	$res = sum([1, 2, 3, 4, 5]); // $ в имени функции
	echo $res;
	
	/* ------------- №6 ------------- */
	function add($num) {
		if ($num <= 9) {
			return '0' . $num; // нужно склеить строку, а не сложить
		}
	}
	
	/* ------------- №7 ------------- */
	function isPrime($num)
	{
		if ($num < 2) {
			return false; // исключить 0 и 1
		}
		
		for ($i = 2; $i <= sqrt($num); $i++) { //
			if ($num % $i === 0) {
				return false; // есть делитель
			}
			return true; // нет делителя
		}
	}
		
	var_dump(isPrime(13)); // должен вывести true
	var_dump(isPrime(12)); // должен вывести false
