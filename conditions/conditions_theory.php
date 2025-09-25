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
