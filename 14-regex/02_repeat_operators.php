<?php
	/*
	 * Операторы повторения символов в регулярках
	 */

	// ⊗ppPmRgRO
	
	$str = 'aa aba abba abbba abca abea';
	
	/* ------------- №1 ------------- */
	$res_1 = preg_replace('#ab+a#', '!', $str); // буква 'b' один или более раз (+)
	echo $res_1 . PHP_EOL; // aa ! ! ! abca abea
	
	/* ------------- №2 ------------- */
	$res_2 = preg_replace('#ab*a#', '!', $str);
	echo $res_2 . PHP_EOL; // ! ! ! ! abca abea
	
	/* ------------- №3 ------------- */
	$res_3 = preg_replace("#ab?a#", '!', $str);
	echo $res_3 . PHP_EOL; // ! ! abba abbba abca abea
	
	/* ------------- №4 ------------- */
	$res_4 = preg_replace('#ab*a#', '!', $str);
	echo $res_4 . PHP_EOL; //  ! ! ! ! abca abea