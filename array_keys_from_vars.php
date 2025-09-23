<?php
	/*
	 * Ключи из переменных в PHP
	 */

	// ⊗ppPmArVK №1
	$arr = [1, 2, 3, 4, 5];
	$key1 = 1;
	$key2 = 2;
	
	$sum = $arr[$key1] + $arr[$key2];
	echo $sum; // 5
	
	// ⊗ppPmArVK №2
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3
	];
	$key = 'b';
	$value = $arr[$key];
	echo $value;
