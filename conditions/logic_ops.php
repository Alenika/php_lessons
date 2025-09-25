<?php
	/*
	 * Логическое И в PHP
	 */

	// ⊗ppPmCdLA №1
	$num = 3;
	if ($num > 0 and $num < 5) {
		echo '+++'; // выведет +++
	} else {
		echo '---';
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLA №2
	$num = 15;
	if ($num >= 10 and $num <= 20) {
		echo '+++'; // выведет +++
	} else {
		echo '---';
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLA №3
	$num1 = 1;
	$num2 = 4;
	if ($num1 <= 1 and $num2 >= 3) {
		echo "+++"; // +++
	} else {
		echo "---";
	}
	echo PHP_EOL;
	
	/*
	 * Логическое ИЛИ в PHP
	 */

	// ⊗ppPmCdLOr №1
	$num1 = -10;
	$num2 = -10;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++';
	} else {
		echo '---'; // сработает
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLOr №2
	$num1 = 0;
	$num2 = 0;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++'; // сработает
	} else {
		echo '---';
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLOr №3
	$num1 = 0;
	$num2 = 5;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++'; // сработает
	} else {
		echo '---';
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLOr №4
	$num1 = 5;
	$num2 = 5;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++'; // сработает
	} else {
		echo '---';
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLOr №5
	$num1 = -5;
	$num2 = 15;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++'; // сработает
	} else {
		echo '---';
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLOr №6
	$num = 1;
	
	if ($num == 0 or $num == 1) {
		echo '+++'; // сработает
	} else {
		echo '---';
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLOr №7
	$num = 2;
	
	if ($num == 0 or $num == 1) {
		echo '+++';
	} else {
		echo '---'; // сработает
	}
	echo PHP_EOL;
	
	// ⊗ppPmCdLOr №8
	$num = 2;
	
	if ($num == 0 or $num == 1 or $num == 2) {
		echo '+++'; // сработает
	} else {
		echo '---';
	}
	echo PHP_EOL;


	
	

