<?php
	/*
	 * Многомерные массивы в PHP
	 */

	// ⊗jsPmSMMA
	
	/* ---------- №1 ---------- */

	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
	
	echo $arr[3][2];
	echo $arr[1][1];
	echo $arr[2][0];
	echo $arr[0][0];
	
	/* ---------- №2 ---------- */
	$arr = [
		[1, 2],
		[3, 4],
		[5, 6]
	];
	
	$sum = 0;
	
	foreach ($arr as $arr_row) {
		foreach ($arr_row as $elem) {
			$sum += $elem;
		}
	}
	
	echo $sum; // 21