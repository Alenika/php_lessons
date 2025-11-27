<?php
	/*
	 * Команда 'или' в регулярных выражениях PHP
	 */

	// ⊗ppPmRgOC
	
	/* ------------- №1 ------------- */
	$str = 'aeeea aeea aea axa axxa axxxa';
	$res = preg_replace('#a(e+|x+)a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$res = preg_replace('#a(e{2}|x+)a#',  '!', $str);
	echo $res . PHP_EOL;