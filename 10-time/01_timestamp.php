<?php
	/*
	 * Работа с timestamp в PHP
	 */
	
	date_default_timezone_set('Asia/Shanghai');
    // ⊗ppPmTmTs
	
	/* ------------- №1 ------------- */
	echo time() . PHP_EOL;
	
	/* ------------- №2 ------------- */
	echo mktime(0, 0, 0, 3, 1, 2025) .PHP_EOL;
	
	/* ------------- №3 ------------- */
	echo mktime(0, 0, 0, 12, 31); // использует текущий год для расчета
	
	/* ------------- №4 ------------- */
	$march_15_2000 = mktime(13, 12, 59, 3, 15, 2000);
	$seconds_diff = time() - $march_15_2000;
	echo $seconds_diff . PHP_EOL;
	
	/* ------------- №5 ------------- */
	$today_start = mktime(7, 23, 48, 10, 24, 2025);
	echo floor((time() - $today_start) / 3600);
	