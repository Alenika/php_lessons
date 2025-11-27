<?php
	/*
	 * Ограничители регулярок в PHP
	 */

	// ⊗ppPmRgLm
	
	/* ------------- №1 ------------- */
	$str = 'test string with a pattern';
	$res = preg_replace('~a+|e+~', '!', $str);
	echo $res . PHP_EOL; // t!st string with ! p!tt!rn
