<?php
	/*
	 * Форматирование числа в PHP
	 */

	// ⊗ppPmSFNF

	// №1
	$str = '12345678';
	echo number_format($str, 0, '.', ' ') . PHP_EOL;
	
	// №2
	$number = 9876543.21;
	echo number_format($number, 2, '.', ' ') . PHP_EOL;
	
	// №3
	$price = 1234.5678;
	$format_number = number_format($price, 2, ',', '.');
	echo '$' . $format_number . PHP_EOL;
	
	
	
	
