<?php
	/*
	 * Изменение массива в цикле PHP
	 */

	// ⊗ppPmLpALC

	/* ------- №1 ------- */
	
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] = $arr[$i] ** 2;
	}
	var_dump($arr);