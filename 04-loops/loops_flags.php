<?php
	/*
	 * Работа с флагами в PHP
	 */

	// ⊗ppPmLpFl

	/* ----------- №1 ----------- */
	
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$flag = false;
	
	foreach ($arr as $elem) {
		if ($elem === 'c') {
			$flag = true;
			break;
		}
	}
	
	if ($flag === true) {
		echo '+++'; // +++
	} else {
		echo '---';
	}
	
	/* ----------- №2 ----------- */

	// два натур делит: 1 и само число
	$num = 17;
	$flag = true;
	
	for ($i = 2; $i < $num; $i++) {
		if ($num % $i === 0) {
			$flag = false;
			break;
		}
	}
	
	if ($flag === true) {
		echo '+++'; // +++ простое
	} else {
		echo '---';
	}