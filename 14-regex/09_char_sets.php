<?php
	/*
	 * Наборы символов в регулярных выражениях PHP
	 */

	// ⊗ppPmRgChS
	
	/* ------------- №1 ------------- */
	$str = 'aba aea aca aza axa';
	$res = preg_replace('#a[bex]a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = 'a1a a3a a7a a9a aba';
	$res = preg_replace('#a[3-6]a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №3 ------------- */
	$str = 'aba aea afa aha aga';
	$res = preg_replace('#a[a-g]a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №4 ------------- */
	$res = preg_replace('#a[a-fj-z]a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №5 ------------- */
	$str = 'aAa aea aEa aJa a3a';
	$res = preg_replace('#a[a-fA-D]a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №6 ------------- */
	$str = 'aAXa aeffa aGha aza ax23a a3sSa';
	$res = preg_replace('#a[a-z]+a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №7 ------------- */
	$res = preg_replace('#a[a-zA-Z]+a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №8 ------------- */
	$res = preg_replace('#a[a-z0-9]+a#', '!', $str);
	echo $res . PHP_EOL;
	
	
	
