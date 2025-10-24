<?php
	/*
	 * Изменение дат в PHP
	 */

	// ⊗ppPmTmMd
	
	// mktime() и strtotime() учитывают високосные годы
	// не подходят для валидации данных
	
	/* ------------- №1 ------------- */
	$date = '2025-12-31';
	$date = date_create('2025-12-31');
	date_modify($date, '+2 days');
	echo date_format($date, 'Y-m-d') . PHP_EOL; // 2026-01-02
	
	/* ------------- №2 ------------- */
	$date = '2025-12-31';
	$date = date_create('2025-12-31');
	date_modify($date, '+1 month +3 days');
	echo date_format($date, 'Y-m-d') . PHP_EOL; // 2026-02-03
	
	/* ------------- №3 ------------- */
	$date = '2025-12-31';
	$date = date_create('2025-12-31');
	date_modify($date, '+1 year');
	echo date_format($date, 'Y-m-d') . PHP_EOL; // 2026-12-31
	
	/* ------------- №4 ------------- */
	$date = '2025-12-31';
	$date = date_create('2025-12-31');
	date_modify($date, '-3 days');
	echo date_format($date, 'Y-m-d') . PHP_EOL; // 2025-12-28
	
	/* ------------- №5 ------------- */
	$date = '2025-12-31';
	$date = date_create('2025-12-31');
	date_modify($date, '-1 month -3 days');
	echo date_format($date, "Y-m-d"); // 2025-11-28