<?php
	/*
	 * Очистка концов строки в PHP
	 */

	// ⊗ppPmSFTr

	// №1
	$str = ' Очистка концов строки в PHP ';
	echo trim($str) . PHP_EOL;
	
	// №2
	$str = '/Убрать слеши с обоих концов/';
	echo trim($str, '/') . PHP_EOL;
	
	// №3
	$str = 'слова слова слова.';
	$str = rtrim($str, '.');
	echo $str . '.';
	
