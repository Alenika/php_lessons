<?php
	/*
	 * Накопление элементов массивов в циклах PHP
	 */

	// ⊗ppPmLpAEA

	/* ---------- №1 ---------- */

	$arr = [2, 5, 9, 3, 1, 4];
	$res = 0;
	
	foreach ($arr as $elem) {
		$res += $elem;
	}
	
	echo $res . ' '; // 24
	
	/* ---------- №2 ---------- */
	
	$arr = [2, 5, 9, 3, 1, 4];
	$res = 0;
	
	foreach ($arr as $elem) {
		if ($elem % 2 == 0) {
			$res += $elem;
		}
	}
	
	echo $res . ' '; // 6
	

