<?php
	/*
	 * Именованные карманы в регулярках PHP
	 */

	// ⊗ppPmRgNP
	
	/* ------------- №1 ------------- */
	$str = '12:59:59';
	$reg = '#(?<hour>\d{2}):(?<minute>\d{2}):(?<second>\d{2})#';
	preg_match($reg, $str, $match);
	print_r($match);
	
	/* ------------- №2 ------------- */
	function get_named_captures(array $match) {
		$named_captures = [];
		foreach ($match as $key => $element) {
			if (is_string($key)) {
					$named_captures[$key] = $element;
			}
		}
		
		return $named_captures;
	}
	
	$str = '12:45:59';
	$reg = '#(?P<hour>\d{2}):(?P<minute>\d{2}):(?P<second>\d{2})#';
	preg_match($reg, $str, $match2);
	
	$named_only = get_named_captures($match2);
	print_r($named_only);
	
