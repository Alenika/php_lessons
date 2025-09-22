<?php
	/*
	 * Массивы
	 */

	// ⊗ppPmArDm №1
	$a = ['a', 'b', 'c'];
	// echo $a; PHP Warning
	var_dump($a); // Array
	
	// ⊗ppPmArEl №1
	$arr = ['a', 'b', 'c'];
	echo $arr[0] . '<br>';
	echo $arr[1] . '<br>';
	echo $arr[2] . '<br>';
	
	// ⊗ppPmArEl №2
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$str = $arr[0] . '+' . $arr[1] . '+' . $arr[2] . '+' . $arr[3];
	echo $str . '<br>';
	
	// ⊗ppPmArEl - №3
	$arr = [1, 2, 3, 4, 5];
	$sum = $arr[0] + $arr[1] + $arr[2] + $arr[3] +  $arr[4];
	echo $sum . '<br>'; // 15
	
	// ⊗ppPmArEl - №4
	$arr = [2, 5, 3, 9];
	// Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $res. Выведите на экран значение этой переменной.

	$res = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
	echo $res . '<br>'; // 37

	/*
	 * Ассоциативные массивы
	 */

	// ⊗ppPmArAs №1
	$user = [
		'name' => 'Анна',
		'surname' => 'Макаревич',
		'patronymic' => 'Владимирована'
	];
	
	echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . '<br>';
	
	// ⊗ppPmArAs №2
	$daysOfTheWeek = [
		'1' => 'Понедельник',
		'2' => 'Вторник',
		'3' => 'Среда',
		'4' => 'Четверг',
		'5' => 'Пятница',
		'6' => 'Суббота',
		'7' => 'Воскресенье',
	];
	
	echo $daysOfTheWeek['1'] . '<br>';
	echo $daysOfTheWeek['2'] . '<br>';
	echo $daysOfTheWeek['3'] . '<br>';
	echo $daysOfTheWeek['4'] . '<br>';
	echo $daysOfTheWeek['5'] . '<br>';
	echo $daysOfTheWeek['6'] . '<br>';
	echo $daysOfTheWeek['7'] . '<br>';



	


	
	
	
	
	
