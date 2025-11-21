<?php
	/*
	 * Группирующие скобки в регулярках PHP
	 */

	// ⊗ppPmRgGB
	
	/* ------------- №1 ------------- */
	$str = 'ab abab abab abababab abea';
	
	$res = preg_replace('#(ab)+#', '!', $str);
	
	echo $res;
