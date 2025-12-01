<?php
	/*
	 * Общий номер карманов в регулярках PHP
	 */

	// ⊗ppPmRgCPN
	
	/* ------------- №1 ------------- */
	$arr = [
		'31-12-2025',
		'30-11-1995',
		'29-10-1990',
	];
	
	$reg = '#(\d{2})-(\d{2})-(?|19(9\d)|20(\d{2}))#';
	
	$res = [];
	
	foreach ($arr as $item) {
		if (preg_match_all($reg, $item, $matches)) {
			$res[] = [
				'day' => $matches[1],
				'month' => $matches[2],
				'year' => $matches[3]
			];
		}
	}
	
	var_dump($res);