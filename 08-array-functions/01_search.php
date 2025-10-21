<?php
	/*
	 * Поиск по массивам в PHP
	 */

	// ⊗ppPmAFSch

	/* ------------- №1 ------------- */
	$arr = [1, 2, 3, 4, 5];
	$res = in_array(3, $arr);
	var_dump($res); // bool
	
	/* ------------- №2 ------------- */
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
	echo array_search('-' , $arr); // 1
	
	/* ------------- №3 ------------- */
	$elem_search = array_search('-', $arr);
	if ($elem_search !== false) {
		array_splice($arr, $elem_search, 1);
	}
	var_dump($arr);