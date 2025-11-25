<?php
	/*
	 * Спецсимволы внутри квадратных скобок в PHP
	 */

	// ⊗ppPmRgSS
	
	/* ------------- №1 ------------- */
	$str = 'aba aea aca aza axa a.a a+a a*a';
	$res = preg_replace('#a[.+*]a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = 'xaz x.z x3z x@z x$z xrz';
	$res = preg_replace('#x[^.@$]z#', '!', $str);
	echo $res . PHP_EOL;
	
