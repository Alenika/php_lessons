<?php
	/*
	 * Необязательность команды else в PHP
	 */

	// ⊗ppPmCdShS №1
	$test = 10;
	if ($test === 10) {
		echo 'верно';
	}
	
	/*
	 * Необязательность фигурных скобок в условиях в PHP
	 */

	// ⊗ppPmCdBO №1
	if ($test == 0) echo 'yes'; else echo 'no';
	// ⊗ppPmCdBO №2
	if ($test == 0) echo 'yes';
	
	/*
	 * Проблема необязательности фигурных скобок в условиях в PHP
	 */

	// ⊗ppPmCdBOP №1
	echo $num;
	echo '+++';
	// ⊗ppPmCdBOP №2
	echo '+++';
	// ⊗ppPmCdBOP №3
	echo '---';
	echo '+++';
	
	/*
	 * Комбинации конструкций if-else в PHP
	 */

	// ⊗ppPmCdCm №1
	$day = 16;
	
	if ($day >= 1 and $day <= 10) {
		echo '1';
	}
	
	if ($day >= 11 and $day <= 20) {
		echo '2';
	}
	
	if ($day >= 21 and $day <= 31) {
		echo '3';
	}
	
	/*
	 * Конструкция elseif в PHP
	 */

	// ⊗ppPmCdEI №1
	$day = 23;
	
	if ($day >= 1 and $day <= 10) {
		echo '1';
	} elseif ($day >= 11 and $day <= 20) {
		echo '2';
	} else {
		echo '3';
	}
	
	// ⊗ppPmCdEI №2
	$day = 123;
	
	if ($day >= 1 and $day <= 10) {
		echo '1';
	} elseif ($day >= 11 and $day <= 20) {
		echo '2';
	} elseif ($day >= 21 and $day <= 31) {
		echo '3';
	} else {
		echo 'Ошибка';
	}
	
	/*
	 * Вложенные if в PHP
	 */

	// ⊗ppPmCdNIf №1
	$age = 50;
	if ($age < 10 or $age > 99) {
		echo 'Число меньше 10 или больше 99';
	} else {
		$sum = $age[0] + $age[1];
		if ($sum <= 9) {
			echo 'Cумма цифр однозначна';
		} else {
			echo 'Cумма цифр двузначна';
		}
	}
	
	/*
	 * Конструкция switch-case в PHP
	 */
	
	// ⊗ppPmCdSch №1
	$num = 2;
	
	switch ($num) {
		case 1:
			echo 'Зима';
			break;
		case 2:
			echo 'Весна';
			break;
		case 3:
			echo 'Лето';
			break;
		case 4:
			echo 'Осень';
			break;
		default:
			echo 'Неверное значение';
	}
	
	/*
	 * Конструкция match в PHP
	 */

	// ⊗ppPmCdMch №1
	$num = 3;
	$season = match ($num) {
		1 => 'зима',
		2 => 'весна',
		3 => 'лето',
		4 => 'осень',
		default => 'неверное значение'
	};
	
	echo $season;
	
	/*
	 * Тернарный оператор в PHP
	 */

	// ⊗ppPmCdTO №1
	$num = -7;
	$res = $num >= 0 ? 1 : -1; // -1
	echo $res;
	$num = 7;
	$res = $num >= 0 ? 1 : -1; // 1
	echo $res;
	
	/*
	 * Оператор объединения с null в PHP
	 */

	// ⊗ppPmCdNC №1
	$user = ['name' => 'john', 'age' => 30];
	
	if (isset($user['name'])) {
		$name = $user['name'];
	} else {
		$name = 'unknown';
	}
	
	$name = $user['name'] ?? 'unknown';
	
