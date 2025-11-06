<?php
	/*
	 * Работа с рекурсией в PHP
	 */

	// Рекурсия - позволяет функции вызывать саму себя

	function func($num) {
		echo $num;
		
		if ($num < 5) {
			$num++;
			func($num); // рекурсивный вызов
		}
	}
	
	func(1);
	
	// Reverse string
	
	function reverse_string($str) {
		if ($str === "") {
			return "";
		}
		
		$remaining = substr($str, 1);
		$firstChar = substr($str, 0, 1);
		
		return reverse_string($remaining) . $firstChar;
	}
	
	echo reverse_string("Hello");
	
	// sumToN
	
	function sum_to_N($n) {
		if ($n === 1) {
			return 1;
		}
		
		return $n + sum_to_N(($n - 1));
	}
	
	echo sum_to_N(4);