<?php
	
	/*
	 * Трехмерный массив в PHP
	 */

	// ⊗ppPmMdTD
	
	/* ---------- №1 ---------- */

	$arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];
	
	$sum = 0;
	
	foreach ($arr as $arr_elem2) {
		foreach ($arr_elem2 as $arr_elem3) {
			foreach ($arr_elem3 as $arr_elem4) {
				$sum += $arr_elem4;
			}
		}
	}
	
	echo $sum; // 36