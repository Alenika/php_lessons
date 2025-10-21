<?php
	/*
	 * Сплайсинг массивов в PHP
	 */

	// ⊗ppPmAFSp
	
	/* ------------- №1 ------------- */
	$arr = [1, 2, 3, 4, 5];
	$res = array_splice($arr, 1, 2);
	print_r($arr); // 1 4 5
	print_r($res); // 2 3
	
	/* ------------- №2 ------------- */
	$arr = [1, 2, 3, 4, 5];
	$res = array_splice($arr, 3, 0, ['a', 'b', 'c']);
	print_r($arr); // 1 5
	print_r($res); // 2 3 4
	
	/* ------------- №3 ------------- */
	$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 2, 0, ['a', 'b', 'c']);
	print_r($arr);
	
	/* ------------- №4 ------------- */
	$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 1, 0, ['a', 'b']);
	array_splice($arr, 5, 0, ['c']);
	array_splice($arr, 7, 0, ['e']);
	print_r($arr);
	
	