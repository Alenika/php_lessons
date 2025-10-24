<?php
	/*
	 * Сравнение даты без года в PHP
	 */

	// ⊗ppPmTmCWY
	
	/* ------------- №1 ------------- */
	$date1 = '09-21';
	$date2 = '09-23';
	
	if ($date1 > $date2) {
		echo 'date1 больше';
	} elseif ($date1 < $date2) {
		echo 'date2 больше'; // date2 больше%
	} else {
		echo 'даты равны';
	}