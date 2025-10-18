<?php
	/*
	 * Переворот строки в PHP
	 */

	// ⊗ppPmSFRv

	// №1
	$str = '12345';
	echo strrev($str) . PHP_EOL;
	
	// №2
	$arr = ['madam', 'otto', 'kayak', 'nun', 'level'];
	foreach ($arr as $elem) {
		$reversed = strrev($elem);
		if ($elem === $reversed) {
			echo $elem . " - палиндром" . PHP_EOL;
		} else {
			echo 'НЕ палиндром' . PHP_EOL;
		}
	}
	
	
