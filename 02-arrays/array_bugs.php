<?php
	/*
	 * Поиск ошибок в коде с массивами PHP
	 */

	// ⊗ppPmArMst №1
	$arr = [1, 2, 3, 4, 5];
	echo $arr[count($arr)-1]; // strlen() для строк
	// echo $arr[count($arr)] ключ 5 не существует, последний индекс 4
	
	// ⊗ppPmArMst №2
	echo $arr[4]; // 5
	echo $arr[count($arr) - 1];
	
	// ⊗ppPmArMst №3
	// Warning: Undefined array key 5

	echo $arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr[4]; // 15
	
	// ⊗ppPmArMst №4
	echo count($arr); // сколько всего
	
	// ⊗ppPmArMst №5
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	echo $arr['a'] + $arr['b'] + $arr['c']; // 6
	
	// ⊗ppPmArMst №6
	$k = 'a';
	echo $arr[$k]; // 1
	
	// ⊗ppPmArMst №7
	$arr = [1, 2, 3, 4, 5];
	echo count($arr);
	
	// ⊗ppPmArMst №8
	// Warning: Undefined array key 1
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	$a = 'a';
	echo $arr[$a]; // 1