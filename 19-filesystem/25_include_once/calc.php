<?php
	require_once 'math.php';
	
	function getArrSquareSum($arr) {
		$sum = 0;
		foreach ($arr as $elem) {
			$sum += getSquare($elem);
		}
		return $sum;
	}
