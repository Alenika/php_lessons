<?php
	/*
	 * Карманы при поиске через регулярки на PHP
	 */

	// ⊗ppPmRgSP
	
	/* ------------- №1 ------------- */
	$str = '2025-12-31';
	
	$reg = '#(\d{4})-(\d{2})-(\d{2})#';
	
	preg_match($reg, $str, $res);
	
	var_dump($res);
	
	//	array(4) {
	//	[0]=>
	//	string(10) "2025-12-31"
	//	[1]=>
	//	string(4) "2025"
	//	[2]=>
	//	string(2) "12"
	//	[3]=>
	//	string(2) "31"
	//	}
	
	/* ------------- №2 ------------- */
	$str = 'index.html';
	
	$reg = '#([a-z]+)\.([a-z]+)#';
	
	preg_match($reg, $str, $res);
	
	var_dump($res);
	
	//	array(3) {
	//	[0]=>
	//	string(10) "index.html"
	//	[1]=>
	//	string(5) "index"
	//	[2]=>
	//	string(4) "html"
	//	}



