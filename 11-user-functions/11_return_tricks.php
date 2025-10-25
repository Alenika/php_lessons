<?php
	/*
	 * Приемы работы с return в PHP
	 */
	
	// ⊗ppPmUFRD
	
	/* ------------- №1 ------------- */
	
	function func($num1, $num2) {
		if ($num1 > 0 and $num2 > 0) {
			return $num1 * $num2; // немедленный возврат, если условие истинно
		} else {
			return $num1 - $num2;
		}
	}
	
	echo func(3, 4);