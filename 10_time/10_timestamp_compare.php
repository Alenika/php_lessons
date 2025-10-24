<?php
	/*
	 * Сравнение timestamp с моментами на PHP
	 */

	// ⊗ppPmTmTC
	
	/* ------------- №1 ------------- */
	$date1 = ['2020', '12', '01'];
	$date2 = ['2019', '12', '31'];
	
	$time1 = mktime(0, 0, 0, $date1[1], $date1[0], $date1[2]);
	$time2 = mktime(0, 0, 0, $date2[1], $date2[0], $date2[2]);
	
	var_dump($time1 > $time2); // bool(false)
