<?php
	/*
	 * Список специальных символов в регулярках в PHP
	 */

	//⊗ppPmRgLSRCh
	
	// $ ^ . * + ? \ / {} [] () |
	
	/* ------------- №1 ------------- */
	$str = 'a.a aba aea';
	$res = preg_replace('#a\.a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = '2+3 223 2223';
	$res = preg_replace('#2\+3#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №3 ------------- */
	$str = '23 2+3 2++3 2+++3 345 567';
	$res = preg_replace('#2\++3#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №4 ------------- */
	$str = '23 2+3 2++3 2+++3 445 677';
	$res = preg_replace('#2\**3#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №5 ------------- */
	$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
	$res = preg_replace('#\*q+\+#', '!', $str);
	echo $res .PHP_EOL;
	
	/* ------------- №6 ------------- */
	$str = '[abc] {abc} abc (abc) [abc]';
	$res = preg_replace('#\[...\]#', '!', $str);
	echo $res . PHP_EOL;
	
	
	
	
	
	
	
	

	