<?php
	/*
	 * Группировка условий в PHP
	 */
	// ⊗ppPmCdCG №1
	$num = 3;
	if (($num > 5 and $num < 10)
		or $num == 20) {
		echo '+++';
	} else {
		echo '---'; // ---
	}
	
	// ⊗ppPmCdCG №2
	$num = 3;
	if ($num > 5
		or ($num > 0 and $num < 3)) {
		echo '+++';
	} else {
		echo '---'; // ---
	}
	
	// ⊗ppPmCdCG №3
	$num = 3;
	
	if ($num == 9
		or ($num > 10 and $num < 20)
		or ($num > 20 and $num < 30)) {
		echo '+++';
	} else {
		echo '---'; // ---
	}
	
	
	/*
	 * Инвертирование высказываний в if-else
	 */

	// ⊗ppPmCdSI №1
	$num1 = 1;
	$num2 = 0;
	if (!($num1 >= 0 or $num2 <= 10)) {
		echo '+++';
	} else {
		echo '---'; // ---
	}
	
	
	/*
	 * Конструкция if-else и булевы значения
	 */

	// ⊗ppPmCdBT №1
	$test = true;
	
	if ($test === true) {
		echo 'true';
	} else {
		echo 'false';
	}
	
	// ⊗ppPmCdBT №2
	$test = false;
	
	if ($test === false) {
		echo 'false';
	} else {
		echo 'true';
	}

	
	/*
	 * Нестрогое сравнение логических значений в PHP
	 */

	// ⊗ppPmCdWBC №1
	echo '+++';
	
	// ⊗ppPmCdWBC №2
	echo '---';
	
	// ⊗ppPmCdWBC №3
	echo '---';
	
	// ⊗ppPmCdWBC №4
	echo '---';
	
	// ⊗ppPmCdWBC №5
	echo '+++';
	
	// ⊗ppPmCdWBC №6
	echo "Переменная test не обьявлена";

	
	/*
	 * Сокращенный if в конструкции if-else
	 */
	
	// ⊗ppPmCdBShI №1
	$test = true;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
	
	// ⊗ppPmCdBShI №2
	$test = true;
	
	if (!$test) {
		echo '+++';
	} else {
		echo '---';
	}
	
	// ⊗ppPmCdBShI №3
	$test = true;
	
	if (!$test) {
		echo '+++';
	} else {
		echo '---';
	}
	
	// ⊗ppPmCdBShI №4
	$test = true;
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}

	
	/*
	 * Нюанс сокращенных операций
	 */

	// ⊗ppPmCdBN №1
	echo '+++';
	// ⊗ppPmCdBN №2
	echo '+++';
	// ⊗ppPmCdBN №3
	echo '---';
	// ⊗ppPmCdBN №4
	echo '---';
	// ⊗ppPmCdBN №5
	echo '---';
	// ⊗ppPmCdBN №6
	echo '---';
	// ⊗ppPmCdBN №7
	echo 'Переменная не обьявлена';
	// ⊗ppPmCdBN №8
	echo '---';
	// ⊗ppPmCdBN №9
	echo '---';
	// ⊗ppPmCdBN №10
	echo '+++';
	
	
	/*
	 * Команда isset в PHP
	 */

	// ⊗ppPmCdIs №1
	$test = null;
	
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
	
	// ⊗ppPmCdIs №2
	$test = null;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
	
	
	
	
