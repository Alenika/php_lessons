<?php
	/*
	 * Перебор многомерных массивов в PHP
	 */

	// ⊗ppPmMdIt

	/* ------------- №1 ------------- */
	
	$arr = [
		[1, 2, 3],
		[4, 5, 6, 7],
		[8, 9]
	];
	
	$sum = 0;
	
	foreach ($arr as $sub2) {
		foreach ($arr as $sub3) {
			foreach ($sub3 as $elem) {
				$sum +=$elem;
			}
		}
	}
	
	echo $sum; // 135
