<?php
	/*
	 * Неравенство по значению и типу в PHP
	 * Строгое неравенство !== vs !=
	 */

	// ⊗ppPmCdVTI №1
		echo '1: ';
		if ('3' != '3') {
			echo '+++';
		} else {
			echo '---';
		}
		echo PHP_EOL;
	
	// ⊗ppPmCdVTI №2
		echo '2: ';
		if ('3' !== '3') {
			echo '+++';
		} else {
			echo '---';
		}
		echo PHP_EOL;
	
	// ⊗ppPmCdVTI №3
		echo '3: ';
		if (3 != '3') {
			echo '+++';
		} else {
			echo '---';
		}
		echo PHP_EOL;
	
	// ⊗ppPmCdVTI №4
		echo '4: ';
		if (3 !== '3') {
			echo '+++';
		} else {
			echo '---';
		}
		echo PHP_EOL;
	
	// ⊗ppPmCdVTI №5
		echo '5: ';
		if (3 !== 2) {
			echo '+++';
		} else {
			echo '---';
		}
		echo PHP_EOL;