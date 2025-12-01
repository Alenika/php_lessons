<?php
	/*
	 * Именованные карманы внутри регулярки PHP
	 */

	// ⊗ppPmRgENP
	
	/* ------------- №1 ------------- */
	$str = '12:59:59 12:59:12 09:45:09';
	
	$reg = '#(?P<hour>\d{2}):\d{2}:(?P=hour)#';
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res[0]); // string(8) "12:59:12"  string(8) "09:45:09"

	
	