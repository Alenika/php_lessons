<?php
	/*
	 * Практика на условия if-else в PHP
	 */

	// ⊗ppPmCdPrm

	/* ---------- №1 ---------- */
	$month = 12;
	
	$season = match ($month) {
		12, 1, 2 => 'Зима ',
		3, 4, 5 => 'Весна ',
		6, 7, 8 => 'Лето ',
		9, 10, 11 => 'Осень ',
		default => 'Неверное значение'
	};
	echo $season . $month . PHP_EOL; // Зима 12

	$month = 8;
	
	switch ($month) {
		case 12: case 1: case 2:
			echo 'Зима ';
			break;
		case 3: case 4: case 5:
			echo 'Весна ';
			break;
		case 6: case 7: case 8:
			echo 'Лето ';
			break;
		case 9: case 10: case 11:
			echo 'Осень ';
			break;
		default:
			echo 'Неверное значение';
	}
	echo $month . PHP_EOL; // Лето 8
	
	/* ---------- №2 ---------- */
	$str = 'abcde';
	if ($str[0] === 'a') {
		echo '+++' . PHP_EOL; // +++
	} else '---' . PHP_EOL;
	
	/* ---------- №3 ---------- */
	$int = 12345;
	$str = (string)$int;
	if ($str[0] === '1' or $str[0] === '2' or $str[0] === '3') {
		echo '+++' . PHP_EOL; // +++
	} else {
		echo '---' . PHP_EOL;
	}
	
	
