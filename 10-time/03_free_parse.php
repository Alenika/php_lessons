<?php
	/*
	 * Разбор дат в свободном формате в PHP
	 */

	// ⊗ppPmTmPs
	
	/* ------------- №1 ------------- */
	$date_info = '2025-12-31';
	$res = strtotime($date_info);
	echo date('d-m-Y', $res) . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$nextMonday = strtotime('next Monday');
	echo date('m.d.Y', $nextMonday) . PHP_EOL;
	
	/* ------------- №3 ------------- */
	$first = strtotime('first day of next month');
	echo date('m.d.Y', $first) . PHP_EOL;
	
	/* ------------- №4 ------------- */
	$day = strtotime('2023-12-25');
	echo date('l', $day);