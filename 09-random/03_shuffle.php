<?php
	/*
	 * Перемешивание массивов в PHP
	 */

	// ⊗ppPmRdAS
	
	/* ------------- №1 ------------- */
	$arr = [1, 2, 3, 4, 5];
	shuffle($arr);
	print_r($arr);
	
	/* ------------- №2 ------------- */
	$arr = range(1, 25);
	shuffle($arr);
	print_r($arr);
	
	/* ------------- №3 ------------- */
	$arr = range('a', 'z');
	shuffle($arr);
	print_r($arr);
	
	/* ------------- №4 ------------- */
	$numbers = range(1, 100);
	shuffle($numbers);
	echo $numbers[0] . ' '  . $numbers[1] . ' ' . $numbers[2];
	
	/* ------------- №5 ------------- */
	$weeks = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
	shuffle($weeks);
	$result = '';
	foreach ($weeks as $day) {
		$result .= $day . ', ';
	}
	$result = rtrim($result, ', ');
	echo $result;
	
	/* ------------- №6 ------------- */
	$names = ['Ann', 'Alica', 'Andrew', 'Bob', 'Elliott'];
	shuffle($names);
	echo $names[0];
	