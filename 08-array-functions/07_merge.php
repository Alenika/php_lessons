<?php
	/*
	 * Слияние массивов в PHP
	 */

	// ⊗ppPmAFMr
	
	/* ------------- №1 ------------- */
	$arr1 = [1, 2, 3];
	$arr2 = ['a', 'b', 'c'];
	$res = array_merge($arr1, $arr2);
	print_r($res);
	
	/* ------------- №2 ------------- */
	$arr1 = ['a', 'b', 'c'];
	$arr2 = [1, 2, 3];
	$res = array_combine($arr1, $arr2);
	print_r($res);
	
