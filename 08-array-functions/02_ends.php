<?php
	/*
	 * Граничные элементы в PHP
	 */

	// ⊗ppPmAFBr
	
	/* ------------- №1 ------------- */
	$arr = [1, 2, 3, 4, 5];
	echo array_shift($arr);
	echo array_pop($arr);
	print_r($arr);
	
	/* ------------- №2 ------------- */
	$arr = [1, 2, 3, 4, 5];
	echo array_unshift($arr, 0);
	echo array_push($arr, 6);
	print_r($arr);