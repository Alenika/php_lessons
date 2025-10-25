<?php
	/*
	 * Sequential Function Calls in PHP
	 */

	// ⊗ppPmUFSC
	
	/* ------------- №1 ------------- */
	function root ($num) {
		return pow ($num, 1/3);
	}
	
	function norm ($num) {
		return round($num, 3);
	}
	
	$res = norm(root(2));
	echo $res; // 1.26