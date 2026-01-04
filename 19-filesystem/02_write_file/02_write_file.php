<?php
	/*
	 * Запись файлов в PHP
	 * ⊗ppPmFSFWr
	 * 332 of 447
	 */

	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$sum = array_sum($arr);
	
	file_put_contents('sum.txt', $sum);
	
	echo "Сумма $sum записана в файл sum.txt";

	
	
