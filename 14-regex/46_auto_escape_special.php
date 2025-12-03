<?php
	/*
	 * Автоматическая экранировка спецсимволов регулярок в PHP
	 */

	// ⊗ppPmRgASE
	
	/* ------------- №1 ------------- */
	$str = 'file.*.txt';
	
	$new_str = preg_quote($str);
	
	echo $new_str . PHP_EOL; // file\.\*\.txt
	
	/* ------------- №2 ------------- */
	$str = 'price+[10-20]';
	
	$new_str = preg_quote($str);
	
	echo $new_str . PHP_EOL; // price\+\[10\-20\]
	
	/* ------------- №3 ------------- */
	$str = 'user\name@domain.com';
	
	$new_str = preg_quote($str);
	
	echo $new_str . PHP_EOL; // user\\name@domain\.com