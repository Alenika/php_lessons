<?php
	/*
	 * Применение return в цикле в PHP
	 */

	// ⊗ppPmUFRLA
	
	/* ------------- №1 ------------- */
	
	function count_halvings($num) {
		$i = 0; // кол-во итераций, для достижения результата
		
		while ($num >= 10) {
			$num /= 2;
			$i++;
		}
		return $i;
	}
	echo count_halvings(100); // 4
	echo count_halvings(10); // 1
	echo count_halvings(5); // 0
	