<?php
	/*
	 * Условия в циклах в PHP
	 */

	// ⊗ppPmLpFI
	
	/* ------ №1 ------ */

	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem % 2 != 0) {
			echo $elem . ' '; // 1 3 5
		}
	}
	
	/* ------ №2 ------ */
	
	$arr = [2, 5, 9, 15, 1, 4];
	
	foreach ($arr as $elem) {
		if ($elem > 3 and $elem < 10) {
			echo $elem . ' '; // 5, 9, 4
		}
	}
