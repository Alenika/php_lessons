<?php
/*
 * GET запросы в PHP (ppPmFmGQ)
 */
	
// 314 of 447

// --- Задача №1: Вывод числа ---
if (isset($_GET['num'])) {
	echo "Задача 1: " . $_GET['num'];
}
// http://localhost:8000/21_get_queries.php?num=5
// Задача 1: 5
// http://localhost:8000/21_get_queries.php?a=100
// Переменной "a" не существует, php ищет "num" и поэтому ничего не вывел


// --- Задача №2: Квадрат числа ---
if (isset($_GET['num2'])) {
	$number = pow($_GET['num2'], 2);
	echo "Задача 2: квадрат числа {$_GET['num2']} = " . $number;
}
// http://localhost:8000/21_get_queries.php?num2=2
// Задача 2: квадрат числа 2 = 4


// --- Задача №3: Сумма двух чисел ---
if (isset($_GET['num3']) && isset($_GET['num4'])) {
	$sum = $_GET['num3'] + $_GET['num4'];
	echo "Задача 3: Сумма числе {$_GET['num3']} и {$_GET['num4']} = " . $sum;
}
// http://localhost:8000/21_get_queries.php?num3=2&num4=6
// Задача 3: Сумма числе 2 и 6 = 8


// --- Задача №4: Проверка 1 (hello) или 2 (bye) ---
if (isset($_GET['num5'])) {
	$num = $_GET['num5'];
	$result = ($num == 1) ? 'hello' : (($num == 2) ? 'bye' : '');
	echo "Задача 4: $result";
}
// http://localhost:8000/21_get_queries.php?num5=2
// Задача 4: bye


// --- Задача №5: Элемент массива по индексу ---
$arr = ['a', 'b', 'c', 'd', 'e'];

if (isset($_GET['index'])) {
	$elem = $_GET['index'];
	if (isset($arr[$elem])) {
		echo $arr[$elem];
	} else {
		echo "Такого индекса не существует";
	}
}
// http://localhost:8000/21_get_queries.php?index=2
// c




