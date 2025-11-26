<?php
	/*
	 * Исключения внутри наборов в регулярках PHP
	 */

	// ⊗ppPmRgSSE
	
	/* ------------- №1 ------------- */
	$str = 'x[]z x{}z x.z x()z';
	$res = preg_replace('#x[\[\]{}()]+z#', '!', $str);
	echo $res . PHP_EOL; // ! ! x.z !
	
	/* ------------- №2 ------------- */
	$str = '[abc] {abc} abc (abc) [abc]';
	$res = preg_replace('#\[.+?\]#', '!', $str);
	$res = preg_replace('#\{.+?\}#', '!', $res);
	$res = preg_replace('#\(.+?\)#', '!', $res);
	echo $res . PHP_EOL; // ! ! abc ! !
	
	
