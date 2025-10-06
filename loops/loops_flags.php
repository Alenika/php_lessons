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