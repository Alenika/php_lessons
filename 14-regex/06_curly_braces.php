<?php
	
	/*
	 * Фигурные скобки в регулярных выражениях PHP
	 */

	// ⊗ppPmRgCB
	
	$str = 'aa aba abba abbba abbbba abbbbba';
	
	/* ------------- №1 ------------- */
	$res = preg_replace('#ab{2,4}a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$res = preg_replace('#ab{0,3}a#','!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №3 ------------- */
	$res = preg_replace('#ab{4,}a#', '!', $str);
	echo $res . PHP_EOL;
	