<?php
	/*
	 * Параметры-ссылки в PHP
	 */

	// ⊗ppPmScPR
	
	/* ------------- №1 ------------- */
	$num = 1;
	
	function func(&$num)
	{
		$num++;
	}
	
	func($num);
	echo $num; // должно вывести 2
	
	/* ------------- №2 ------------- */
	$arr = [1, 2, 3, 4, 5];
	
	function func2(&$arr)
	{
		$arr[0] = '!';
	}
	
	func2($arr);
	var_dump($arr);
