<?php
	/*
	 * Случайный элемент массива в PHP
	 */

	// ⊗ppPmRdAE
	
	/* ------------- №1 ------------- */
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3
	];
	echo array_rand($arr);
	
	/* ------------- №2 ------------- */
	$key = array_rand($arr);
	echo $arr[$key];
	
	/* ------------- №3 ------------- */
	$fruits = [
		'fruit1' => 'Apple',
		'fruit2' => 'Banana',
		'fruit3' => 'Pear',
		'fruit4' => 'Cherry',
		'fruit5' => 'Pineapple'
	];
	$key_fruit = array_rand($fruits);
	echo $fruits[$key_fruit] . PHP_EOL;
	
	/* ------------- №4 ------------- */
	$numbers = [10, 20, 30, 40, 50];
	$key = array_rand($numbers);
	echo $key . PHP_EOL;
	echo $numbers[$key] . PHP_EOL;
	
	/* ------------- №5 ------------- */
	$arr = [];
	for ($i = 0; $i < 3; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	$keys = array_keys($arr);
	print_r($keys);
	$key_value = array_rand($arr);
	echo $arr[$key_value];
	