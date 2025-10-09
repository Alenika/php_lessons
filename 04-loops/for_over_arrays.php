<?php
	/*
	 * Цикл for для массивов в PHP
	 */

	// ⊗ppPmLpALF
	
	/* ----------  №1  ---------- */
	
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		echo $arr[$i]; // abcde
	}
	
	/* ----------  №2  ---------- */

	for ($i = 0; $i < $length - 1; $i++) {
			echo $arr[$i]; // abcd
	}
	
	/* ----------  №3  ---------- */
	
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$length = count($arr);
	
	for ($i = 0; $i < $length / 2; $i++) {
		echo $arr[$i]; // 1234
	}


	