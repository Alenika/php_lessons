<?php
	/*
	 * Часовой пояс в PHP
	 */

	// ⊗ppPmTmTz
	
	/* ------------- №1 ------------- */
	echo date('H:i:s') . PHP_EOL;
	// время не совпадает
	// 09:46:10
	
	/* ------------- №2 ------------- */
	echo date_default_timezone_get() . PHP_EOL; // UTC
	
	/* ------------- №3 ------------- */
	$newTimeZone = 'Europe/London';
	date_default_timezone_set($newTimeZone);
	echo date_default_timezone_get() . PHP_EOL; // Europe/London
	echo date('H:i:s'); // 10:51:20

	date_default_timezone_set('Asia/Shanghai');
	echo date_default_timezone_get() . PHP_EOL;
	echo date('H:i:s') . PHP_EOL; // 17:53:34 время совпало
	
	

