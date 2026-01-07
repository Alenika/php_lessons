<?php
	/*
	 * Отличаем папку от файла в PHP
	 * ⊗ppPmFSFDD
	 * 349 of 447
	 */

	// №1
	$path = 'test_dir';
	
	if (is_dir($path)) {
		echo 'Это папка<br><br>'; // Это папка
	}
	
	// №2
	$path = 'test_file.txt';
	
	if (is_file($path)) {
		echo 'Это файл'; // Это файл
	}
	
