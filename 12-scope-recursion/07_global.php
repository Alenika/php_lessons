<?php
	/*
	 * Глобальные переменные в PHP
	 */

	// ⊗ppPmScGV
	
	/* ------------- №1 ------------- */
	$num = 1;
	
	function func() {
		global $num;
		$num++;
	}
	
	func();
	echo $num; // должно вывести 2
	
	/* ------------- №2 ------------- */
	$num2 = 1;
	
	function func2()
	{
		global $num2;
		$num2++;
		return $num2;
	}
	
	echo func2(); // должно вывести 2
	
	/* ------------- №3 ------------- */
	$num3 = 1;
	
	function func3() {
		global $num3;
		return $num3;
	}
	
	echo func3(); // должно вывести 1