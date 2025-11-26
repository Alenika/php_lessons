<?php
	/*
	 * Конец или начало слова в регулярках PHP
	 */

	// ⊗ppPmRgWB
	
	/* ------------- №1 ------------- */
	$str = 'aaa xaa aaa xbb aaa';
	$res = preg_replace('#\bx[a-z]+#', '!', $str);
	echo $res . PHP_EOL;
