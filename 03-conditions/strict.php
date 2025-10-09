<?php
	/*
	 * Равенство по значению и типу в PHP
	 */

	// ⊗ppPmCdVTE 1
	$test1 = '3';
	$test2 = '3';
	
	if ($test1 == $test2) {
		echo '+++'; // +++
	} else {
		echo '---';
	}
	
	// ⊗ppPmCdVTE 2
	$test1 = '3';
	$test2 = '3';
	
	if ($test1 === $test2) {
		echo '+++'; // +++
	} else {
		echo '---';
	}
	
	// ⊗ppPmCdVTE 3
	$test1 = 3;
	$test2 = '3';
	
	if ($test1 == $test2) {
		echo '+++'; // +++
	} else {
		echo '---';
	}
	
	// ⊗ppPmCdVTE 4
	$test1 = 3;
	$test2 = '3';
	
	if ($test1 === $test2) {
		echo '+++';
	} else {
		echo '---'; // ---
	}
	
	// ⊗ppPmCdVTE 5
	$test1 = 3;
	$test2 = 3;
	
	if ($test1 === $test2) {
		echo '+++'; // +++
	} else {
		echo '---';
	}
