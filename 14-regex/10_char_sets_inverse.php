<?php
	/*
	 * Инвертирование наборов символов в регулярках
	 */

	// ⊗ppPmRgChSI
	
	/* ------------- №1 ------------- */
	$str = '1e2 1x2 1y2 1z2';
	$res = preg_replace('#1[^ex]2#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = 'x1z x2z x5z x8z xaz';
	$res = preg_replace('#x[^2-7]z#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №3 ------------- */
	$str = 'xaz xAaz x1z x@z';
	$res = preg_replace('#x[^A-Z]+z#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №4 ------------- */
	$str = 'xABz xcdz x15z x67z x@#z';
	$res = preg_replace('#x[^a-zA-Z1-5]+z#', '!', $str);
	echo $res . PHP_EOL;
	