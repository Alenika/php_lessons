<?php
	/*
	 * Отработка циклов PHP
	 */

	// ⊗ppPmLpPrm

	// №1
	for ($i = 1; $i <= 100; $i++) {
		echo $i . "<br>";
	}
	
	// №2
	for ($i = 100; $i >= 1; $i--) {
		echo $i . "<br>";
	}
	
	// №3
	for ($i = 1; $i <= 100; $i++) {
		if ($i % 2 == 0) {
			echo $i . "<br>";
		}
	}
	
	// №4
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = 'x';
		echo $arr[$i];
	}
	
	// №5
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		$arr[] = $i + 1;
		echo $arr[$i];
	}
	
	// №6
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
	foreach ($arr as $elem) {
		if ($elem > 0 and $elem < 10) {
			echo $elem;
		}
	}
	
	// №7
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
	foreach ($arr as $elem) {
		if ($elem === 5) {
			echo '+++';
			break;
		}
	}
	
	// №8
	$arr = [1, 2, 3, 4, 5];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem;
	}
	echo $sum;
	
	// №9
	$arr = [1, 2, 3, 4, 5];
	$sum = 0;
	foreach ($arr as $elem) {
		$square = $elem ** 2;
		$sum += $square;
	}
	echo $sum;
	
	// №10
	$arr = [1, 2, 3, 4, 5];
	$sum = 0;
	$length = count($arr);
	foreach ($arr as $elem) {
		$sum += $elem;
	}
	echo $arithmetic = $sum / $length;
	
	// №11
	$num = 5;
	$factorial = 1;
	for ($i = 1; $i <= $num; $i++) {
		$factorial *= $i;
	}
	echo $factorial;
	
	// №12
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
	foreach ($arr as $key => $elem) {
		$arr[$key] = $elem + ($elem * 0.10);
	}
	var_dump($arr);
	
	// №13
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
	foreach ($arr as $key => $elem) {
		if ($elem <= 400) {
			$arr[$key] = $elem + ($elem * 0.10);
		}
	}
	var_dump($arr);