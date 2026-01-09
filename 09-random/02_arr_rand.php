<?php
	/*
	 * Случайный элемент массива в PHP
	 * ⊗ppPmRdAE
	 * 179 of 447
	 */
	
	/* ------------- №1 ------------- */
	echo "<h4>№1: Выведите на экран случайный ключ из данного массива</h4>";
	$arr = [
		'a' => 1,
		'b' => 2,
		'c' => 3
	];
	echo array_rand($arr);
	
	/* ------------- №2 ------------- */
	echo "<h4>№2: Выведите на экран случайный элемент из данного массива.</h4>";
	$key = array_rand($arr);
	echo $arr[$key];
	
	/* ------------- №3 ------------- */
	echo "<h4>№3</h4>";
	
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
	echo "<h4>№4</h4>";
	
	$numbers = [10, 20, 30, 40, 50];
	$key = array_rand($numbers);
	echo $key . PHP_EOL;
	echo $numbers[$key] . PHP_EOL;
	
	/* ------------- №5 ------------- */
	echo "<h4>№5</h4>";
	
	$arr = [];
	for ($i = 0; $i < 3; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	$keys = array_keys($arr);
	print_r($keys);
	$key_value = array_rand($arr);
	echo $arr[$key_value];
	
	/* ------------- №6 ------------- */
	echo "<h4>№6: Случайная пара (ключ + значение)</h4>";
	
	$capitals = [
		'Россия' => 'Москва',
		'Франция' => 'Париж',
		'Германия' => 'Берлин',
		'Италия' => 'Рим'
	];
	
	$randomCountry = array_rand($capitals);
	$randomCity = $capitals[$randomCountry];
	
	echo "Столица страны $randomCountry - город $randomCity";
	
	
	
	