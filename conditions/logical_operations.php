<?php
	/*
	 * Логические операции в PHP
	 */

	// ⊗ppPmCdLO №1
	$a = 2 * (3 - 1);
	$b = 6 - 2;
	
	var_dump($a == $b); // bool(true)
	
	// ⊗ppPmCdLO №2
	$a = 5 * (7 - 4);
	$b = 1 + 2 + 7;
	
	var_dump($a > $b); // bool(true)
	
	// ⊗ppPmCdLO №3
	$a = 2 ** 4;
	$b = 4 ** 2;
	var_dump($a != $b); // bool(false)

	/*
	 * Определение части часа в PHP
	 */

	// ⊗ppPmCdExHP №1
	$min = 10;
	
	if ($min >= 0 and $min <= 19) {
		echo "1"; // 1
	}
	if ($min >= 20 and $min <= 39) {
		echo "2";
	}
	if ($min >= 40 and $min <= 59) {
		echo "3";
	}
	
	/*
	 * Проверка длины строк и массивов в PHP
	 */

	// ⊗ppPmCdExSAL №1
	$arr = [3, 4, 5];
	
	if (count($arr) == 3) {
		echo $sum = $arr[0] + $arr[1] + $arr[2]; // 12
	} else {
		echo '<Больше 3 элементов';
	}
	
	/*
	 * Проверка символа строки в PHP
	 */

	// ⊗ppPmCdExSCC №1
	$str = 'Это строка 0';
	$last = $str[-1];
	if ($last === '0') {
		echo '!'; // !
	}
	
	/*
	 * Проверка остатка от деления в PHP
	 */

	// ⊗ppPmCdExRC №1
	$num = 7;
	if ($num % 2 === 0) {
		echo 'четное';
	} else {
		echo 'нечетное';
	}
	
	// ⊗ppPmCdExRC №2
	$num = 15;
	if ($num % 3 === 0) {
		echo 'делится на 3';
	} else {
		echo 'не делится на 3';
	}