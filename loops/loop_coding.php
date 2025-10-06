<?php
	/*
	 * Советы по написанию кода циклов в PHP
	 */

	// ⊗ppPmLpCdg

	/* --------- №1 --------- */
	
	$arr = [10, 20, 30, 40, 21, 32, 51];
	$sum = 0;
	
	foreach ($arr as $elem) {
		echo $elem . ' '; // 10 20 30 40 21 32 51
	}
	
	foreach ($arr as $elem) {
		$str = (string)$elem;
		$first = $str[0];
		echo $first . ' '; // 1 2 3 4 2 3 5
	}
	
	foreach ($arr as $elem) {
		$str = (string)$elem;
		$first = $str[0];
		if ($first === '1' or $first === '2') {
			$sum += $elem;
		}
	}
	
	echo $sum . ' '; // 51
	
	
	
	
	
	