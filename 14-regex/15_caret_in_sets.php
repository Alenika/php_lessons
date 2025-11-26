<?php
	/*
	 * Символ шляпки внутри наборов в регулярках PHP
	 */

	// ⊗ppPmRgSHt
	
	/* ------------- №1 ------------- */
	$str = '^xx axx ^zz bkk @ss';
	$res = preg_replace('#[\^@]\w{2}#', '!', $str);
	echo $res. PHP_EOL; // ! axx ! bkk !
	
	/* ------------- №2 ------------- */
	$res = preg_replace('#\b[^\^@]\w{2}\b#', '!', $str);
	echo $res . PHP_EOL; // ^xx ! ^zz ! @ss
	
	/* ------------- №3 ------------- */
	$res = preg_replace('#\b[^\^]\w{2}\b#', '!', $str);
	echo $res . PHP_EOL; // ^xx ! ^zz ! @ss
	
