<?php
	/*
	 * Замена с коллбэком через регулярки в PHP
	 */

	// ⊗ppPmRgRCb
	
	/* ------------- №1 ------------- */
	$str = 'The numbers are 3, 7 and 12';
	
	$res = preg_replace_callback('#\d+#', function($match) {
		$number = (int)$match[0];
		return $number * $number;
		}, $str);
	
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = '2023-01-15 2022-12-31 2024-05-20';
	
	$res = preg_replace_callback('#(\d{4})-(\d{2})-(\d{2})#', function ($match) {
		return $match[3] . '.' . $match[2] . '.' . $match[1];
	}, $str);

	echo $res . PHP_EOL;
	
	/* ------------- №3 ------------- */
	$str = 'Costs: $15, $20, $100';
	
	$res = preg_replace_callback('#\$(\d+)#', function ($match) {
		$price = (int)$match[1];
		$new_price = round($price * 1.1);
		return '$' . $new_price;
	}, $str);
	
	echo $res . PHP_EOL;
