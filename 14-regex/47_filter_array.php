<?php
	/*
	 * Фильтрация массива через регулярки в PHP
	 */

	// ⊗ppPmRgAF
	
	/* ------------- №1 ------------- */
	$array = ['apple', 'banana', 'cherry', 'date', 'fig'];
	
	$reg = '#^b#';
	
	$res = preg_grep($reg, $array);
	
	print_r($res); // [1] => banana
	
	/* ------------- №2 ------------- */
	$arr = ['error404', 'success', 'warning', 'info', 'error500'];
	
	$reg = '#error#';
	
	$res = preg_grep($reg, $arr);
	
	print_r($res); // [0] => error404 [4] => error500
	
	/* ------------- №3 ------------- */
	$arr = ['123', '45.6', '78', '9.0', 'text'];
	
	$reg = '#^\d+$#';
	
	$res = preg_grep($reg, $arr);
	
	print_r($res); //  [0] => 123 [2] => 78
	
	/* ------------- №4 ------------- */
	$arr = [
		'user1@example.com',
		'invalid',
		'user2@test.org',
		'not-email'
	];
	
	$reg = '#^.+@.+\..+$#';
	
	$res = preg_grep($reg, $arr);
	
	print_r($res); // [0] => user1@example.com [2] => user2@test.org
	
