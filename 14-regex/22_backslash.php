<?php
	/*
	 * Проблема обратного слеша в PHP
	 */

	// ⊗ppPmRgBc
	
	/* ------------- №1 ------------- */
	$str = 'a\\b c\\d e\\f';
	$res = preg_replace('#\w\\\\\w#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = 'a\\b c\\\\d e\\\\\\f';
	$res = preg_replace('#\w\\\\+\w#', '!', $str);
	echo $res . PHP_EOL;