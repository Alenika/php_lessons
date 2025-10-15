<?php
	/*
	 * Математические операции над массивами в PHP
	 */

	// ⊗ppPmMFAr

	// №1
	
	$arr = [1, 2, 3, 4, 5];
	
	$sum = array_sum($arr);
	
	echo $sum . '<br>'; // 15

	// №2
	
	$res = 0;
	$res = array_product($arr);
	
	echo $res . '<br>'; // 120

	// №3

	$res = 0;
	$res = array_sum($arr) / count($arr);
	
	echo $res . '<br>'; // 3
	