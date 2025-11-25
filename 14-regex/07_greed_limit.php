<?php
	/*
	 * Ограничение жадности в регулярках в PHP
	 */

	// ⊗ppPmRgGL
	
	/* ------------- №1 ------------- */
	$str = 'aba accca azzza wwwwa';
	$res = preg_replace('#a.+?a#', '!', $str);
	echo $res . PHP_EOL;
	
