<?php
	/*
	 * Инструкция break в PHP
	 */

	// ⊗ppPmLpBr

	/* ------- №1 ------- */
	$arr = [7, 2, 0, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem == 0) {
			break; // 72
		} else {
			echo $elem;
		}
	}
	
	/* ------- №2 ------- */
	$arr = [4, 6, -3, 2, 7];
	$sum = 0;
	
	foreach ($arr as $elem) {
		if ($elem < 0) {
			break;
		} else {
			$sum += $elem;
		}
	}
	
	echo $sum; // 10
	
	/* ------- №3 ------- */
	/* ------- №4 ------- */
