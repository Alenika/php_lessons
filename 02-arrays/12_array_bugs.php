<?php
	declare(strict_types=1);
	
	/**
	 * Поиск ошибок в коде с массивами PHP (Debug)
	 * ⊗ppPmArMst | 67 of 447
	 */

	// ⊗ppPmArMst №1
	// №1: Ошибка была в strlen() (она для строк). Используем count().
	$arr = [1, 2, 3, 4, 5];
	echo $arr[count($arr)-1] . "<br>";
	// !!! echo $arr[count($arr)] ключ 5 не существует, последний индекс 4
	
	// ⊗ppPmArMst №2
	// №2: Ошибка была в индексе. Последний индекс всегда count - 1.
	echo $arr[4]; // 5
	echo $arr[count($arr) - 1] . "<br>";
	
	// ⊗ppPmArMst №3
	// №3: Ошибка была в нумерации. Индексы начинаются с 0, а не с 1.
	// Warning: Undefined array key 5
	echo $arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr[4] . "<br>"; // 15
	
	// ⊗ppPmArMst №4
	// №4: Ошибка была в count([$arr]). Это создавало массив внутри массива.
	echo count($arr). "<br>"; // сколько всего
	
	// ⊗ppPmArMst №5
	// №5: Ошибка была в отсутствии кавычек у строковых ключей.
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	echo $arr['a'] + $arr['b'] + $arr['c'] . "<br>"; // 6
	
	// ⊗ppPmArMst №6
	// №6: Ошибка была в '$k'. В одинарных кавычках переменная не раскрывается.
	$k = 'a';
	echo $arr[$k] . "<br>"; // 1
	
	// ⊗ppPmArMst №7
	// №7: Здесь код изначально был верным
	$arr = [1, 2, 3, 4, 5];
	echo count($arr) . "<br>";
	
	// ⊗ppPmArMst №8
	// №8: Ошибка была в значении ключа. Ключа 1 не существует, есть только 'a', 'b', 'c'.
	// Warning: Undefined array key 1
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
	];
	
	$a = 'a';
	echo $arr[$a] . "<br>"; // 1