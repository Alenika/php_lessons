<?php
	/*
	 * Случайное число в PHP
	 * 178 of 447
	 */

	// ⊗ppPmRdNb
	
	/* ------------- №1 ------------- */
	echo "<h4>№1: Случайное число от 1 до 100</h4>";
	echo mt_rand(1, 100) . '<br>';
	
	/* ------------- №2 ------------- */
	echo "<h4>№2: Массив из 10 случайных чисел</h4>";
	
	$arr = [];
	
	for ($i = 0; $i < 10; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	print_r($arr);
	
	echo "<br><br>";
	
	/* ------------- №3 ------------- */
	echo "<h4>№3: Массив из 7 случайных чисел (1-50)</h4>";
	$arr = [];
	
	for ($i = 0; $i < 7; $i++) {
		$arr[] = mt_rand(1, 50);
	}
	print_r($arr);
	
	echo "<br>";
	
	/* ------------- №4 ------------- */
	echo "<h4>№4: Сумма 5 случайных чисел (10-99)</h4>";
	$arr = [];
	
	for ($i = 0; $i < 5; $i++) {
		$arr[] = mt_rand(10, 99);
	}
	echo array_sum($arr) . "<br>";
	
	/* ------------- №5 ------------- */
	echo "<h4>№5: Удаление дубликатов из случайного массива</h4>";
	
	$arr = [];
	
	for ($i = 0; $i < 10; $i++) {
		$arr[] = mt_rand(1, 5); // чтобы было больше дубликатов
	}
	$arr_unique = array_unique($arr);
	print_r($arr_unique);
	echo "<br>";
	
	/* ------------- №6 ------------- */
	echo "<h4>№6: Минимум и максимум в массиве</h4>";
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	echo min($arr) . PHP_EOL . "\n";
	echo max($arr) . PHP_EOL . "<br>";
	
	/* ------------- №7 ------------- */
	echo "<h4>№7: Сортировка случайного массива</h4>";
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	// если не важны ключи
	rsort($arr);
	print_r($arr);
	echo "<br>";
	// сохранение ключей
	arsort($arr);
	print_r($arr);
	echo "<br>";
	
	/* ------------- №8 ------------- */
	echo "<h4>№8: Случайный элемент массива</h4>";
	
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	
	// array_rand возвращает случайный !!! ключ (индекс) массива
	$random_key = array_rand($arr);
	echo $arr[$random_key] . "\n";
	
	// mt_rand (через индексы)
	$random_index = mt_rand(0, count($arr) - 1);
	echo $arr[$random_index] . "<br>";
	
	/* ------------- №9 ------------- */
	echo "<h4>№9: Два случайных элемента массива</h4>";
	
	$arr = [];
	
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = mt_rand(1, 50);
	}
	
	$random_keys = array_rand($arr, 2);
	
	foreach ($random_keys as $key) {
		echo $arr[$key] . "\n";
	}
	
	/* ------------- №10 ------------- */
	echo "<h4>№10: Перемешивание массива (shuffle)</h4>";
	
	$letters = ['a', 'b', 'c', 'd', 'e'];
	
	echo "До: " . implode(',', $letters) . "<br>";
	
	// shuffle меняет старый массив!!! передача по ссылке
	shuffle($letters);
	
	echo "После: " . implode(',', $letters) . "<br>";
	
	$result = shuffle($arr);
	var_dump($result); // bool (true)
	
	
	
	
	
	
	
	
	
	
	