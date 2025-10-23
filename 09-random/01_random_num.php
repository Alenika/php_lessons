<?php
	/*
	 * Случайное число в PHP
	 */

	// ⊗ppPmRdNb
	
	/* ------------- №1 ------------- */
	echo mt_rand(1, 100);
	
	/* ------------- №2 ------------- */
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	print_r($arr);
	
	/* ------------- №3 ------------- */
	$arr_3 = [];
	for ($i = 0; $i < 7; $i++) {
		$arr_3[] = mt_rand(1, 50);
	}
	print_r($arr_3);
	
	/* ------------- №4 ------------- */
	$arr_4 = [];
	for ($i = 0; $i < 5; $i++) {
		$arr_4[] = mt_rand(10, 99);
	}
	echo array_sum($arr_4);
	
	/* ------------- №5 ------------- */
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = mt_rand(1, 5); // чтобы было больше дубликатов
	}
	$arr_unique = array_unique($arr);
	print_r($arr_unique);
	
	/* ------------- №6 ------------- */
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	echo min($arr) . PHP_EOL;
	echo max($arr) . PHP_EOL;
	
	/* ------------- №7 ------------- */
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	// если не важны ключи
	rsort($arr);
	print_r($arr);
	// сохранение ключей
	arsort($arr);
	print_r($arr);