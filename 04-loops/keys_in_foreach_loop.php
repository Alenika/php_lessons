<?php
	/*
	 * Ключи в цикле foreach в PHP
	 */

	// ⊗ppPmLpFeK №1
	
	$arr = [
		'user1'=>30,
		'user2'=>32,
		'user3'=>33
	];
	
	foreach ($arr as $key => $elem) {
		echo $key . ' - ' . $elem . PHP_EOL;
	}