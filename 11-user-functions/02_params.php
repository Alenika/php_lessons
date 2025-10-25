<?php
	/*
	 * Function Parameters in PHP
	 */

	// ⊗ppPmUFPr
	
	/* ------------- №1 ------------- */
	function print_cube ($number) {
		echo $number ** 3 . PHP_EOL;
	}
	
	print_cube(2); // 8
	print_cube(3); // 27
	
	/* ------------- №2 ------------- */
	function check_sign ($number) {
		if ($number > 0) {
			echo '+++' . PHP_EOL;
		} else {
			echo '---' . PHP_EOL;
		}
	}
	
	check_sign(-10); // ---
	check_sign(10); // +++
	check_sign(0); // ---
	
	
