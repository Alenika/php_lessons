<?php
	/*
	 * Цикл while в PHP
	 */

	// ⊗ppPmLpWl

	/* --------- 1 --------- */
	$num = 1;
	
	while ($num <= 100) {
		echo $num++ . PHP_EOL;
	}
	
	/* --------- 2 --------- */
	$num = 11;
	
	while ($num <= 33) {
		echo $num++ . PHP_EOL;
	}
	
	/* --------- 3 --------- */
	$num = 100;
	
	while ($num >= 1) {
		echo $num-- . PHP_EOL;
	}
	
	/* --------- 4 --------- */
	$num = 16;
	$iteration = 0;
	
	while ($num < 1000) {
		$num *= 3;
		$iteration++;
	}
	echo $num . PHP_EOL; // 1296
	echo $iteration . PHP_EOL; // 4
	