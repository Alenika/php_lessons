<?php
	/*
	 * Множественные операции в PHP
	 */

	// ⊗ppPmAFSO
	
	/* ------------- №1 ------------- */
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
	$res = array_intersect($arr1, $arr2);
	var_dump($res);
	
	/* ------------- №2 ------------- */
	$res2_1 = array_diff($arr1, $arr2);
	$res2_2 = array_diff($arr2, $arr1);
	$res = array_merge($res2_1, $res2_2);
	var_dump($res);