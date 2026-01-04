<?php
	/*
	 * Комбинация операций чтения и записи файла в PHP
	 * ⊗ppPmFSOC
	 * 333 of 447
	 */

	// №1: Возведение числа в квадрат
	$num = trim(file_get_contents('03_task1.txt'));
	
	$res = $num * $num;
	
	echo "Задача 1: $res записан в файл 03_task1.txt<br><br>";
	
	file_put_contents('03_task1.txt', $res);
	
	
	// №2: Счетчик обновлений страницы
	$count = trim(file_get_contents('03_count.txt'));
	
	$count++;
	
	file_put_contents('03_count.txt', $count);
	
	echo "Задача 2: Обновили страницу $count раз<br><br>";
	
	
	// №3: Слияние нескольких файлов в один
	$files = ['1.txt', '2.txt', '3.txt'];
	$resultStr = '';
	
	foreach ($files as $file) {
		$resultStr .= file_get_contents($file);
	}
	
	file_put_contents('new.txt', $resultStr);
	
	echo "Задача 3: $resultStr";
	
	// Задача 1: 4 записан в файл 03_task1.txt
	//
	// Задача 2: Обновили страницу 2 раз
	//
	// Задача 3: 123