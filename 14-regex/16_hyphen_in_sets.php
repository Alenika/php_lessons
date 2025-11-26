<?php
	/*
	 * Дефис внутри наборов в регулярках PHP
	 */

	// ⊗ppPmRgSHy
	
	/* ------------- №1 ------------- */
	$str = 'xaz xBz xcz x-z x@z';
	$res = preg_replace('#x[a-zA-Z-]z#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = 'xaz x$z x-z xcz x+z x%z x*z';
	$res = preg_replace('#x[$+-]z#', '!', $str);
	echo $res . PHP_EOL;
	
	
	
	
