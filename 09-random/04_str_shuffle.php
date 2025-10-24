<?php
	/*
	 * Перемешивание строк в PHP
	 */

	// ⊗ppPmRdSS
	
	/* ------------- №1 ------------- */
	$str = '122333';
	$shuffled = str_shuffle($str);
	echo $shuffled . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = range('a', 'z');
	shuffle($str);
	$result = '';
	for ($i = 0; $i < 6; $i++) {
		$result .= $str[$i];
	}
	echo $result . PHP_EOL;
	
	// Повторение
	
	/* ------------- №3 ------------- */
	$number = mt_rand(5, 15) * 2;
	echo $number . PHP_EOL;
	
	/* ------------- №4 ------------- */
	$colors= ['red', 'green', 'blue', 'yellow'];
	$key = array_rand($colors);
	$color = $colors[$key];
	echo $key . ' ' . $color . PHP_EOL;
	
	/* ------------- №5 ------------- */
	$numbers = range(1, 9);
	shuffle($numbers);
	$result = '';
	for ($i = 0; $i < 3; $i++) {
		$result .= $numbers[$i] . ' ';
	}
	$result = rtrim($result);
	echo $result . PHP_EOL;
	
	/* ------------- №6 ------------- */
	$str = 'abcdef';
	$str = str_shuffle($str);
	$reversed = '';
	for ($i = strlen($str) - 1; $i >= 0; $i--) {
		$reversed .= $str[$i];
	}
	echo $reversed . PHP_EOL;
	
	/* ------------- №7 ------------- */
	$arr = range(1, 5);
	print_r($arr);
	
	$res = '';
	for ($i = 4; $i >= 0; $i--) {
		$res .= $arr[$i];
	}
	echo $res . PHP_EOL; // вывод как строка
	
	$reversed = [];
	for ($i = count($arr) - 1; $i >= 0; $i--) {
		$reversed[] = $arr[$i];
	}
	print_r($reversed); // вывод массива
	
	/* ------------- №8 ------------- */
	$str = 'planet';  // только цикл и конкатенация
	$res = '';
	for ($i = strlen($str) - 1; $i >= 0; $i--) {
		$res .= $str[$i];
	}
	echo $res .PHP_EOL;
	
	/* ------------- №9 ------------- */
	// половина массива в обратном порядке
	$numbers = [];
	for ($i = 0; $i < 6; $i++) {
		$numbers[] = mt_rand(1, 10);
	}
	print_r($numbers);
	$result = [];
	for ($i = 0; $i < 3; $i++) {
		echo $numbers[$i] . ' ';
	}
	for ($i = 5; $i >= 3; $i--) {
		echo $numbers[$i] . ' ';
	}
	
	