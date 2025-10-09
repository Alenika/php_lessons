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
	
	/* ---------- №3 ---------- */
	
	$arr = [2, 5, 9, 3, 1, 4];
	$res = 0;
	
	foreach ($arr as $elem) {
		$res += ($elem ** 2);
	}
	
	echo $res . ' '; // 136
	
	/* ---------- №4 ---------- */
	
	$arr = [2, 5, 9, 3, 1, 4];
	$res = 1;
	
	foreach ($arr as $elem) {
		$res *= $elem;
	}

	echo $res . ' '; // 1000


	

	

