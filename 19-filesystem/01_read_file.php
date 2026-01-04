<?php
	/*
	 * Чтение файлов в PHP
	 * ⊗ppPmFSFRe
	 * 331 of 447
	 */

	$number1 = trim(file_get_contents('01_1.txt'));
	$number2 = trim(file_get_contents('01_2.txt'));
	
	$sum = $number1 + $number2;
	
	echo "Сумма чисел = $sum"; // Сумма чисел = 15

	// trim - обрезать невидимые переносы строк и пробелы
?>