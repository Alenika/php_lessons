<?php
	/*
	 * Группы символов в регулярных выражениях PHP
	 */

	// ⊗ppPmRgChG
	
	/* ------------- №1 ------------- */
	$str = 'a1a a2a a3a a4a a5a aba aca';
	$res = preg_replace('#a\da#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = 'a1a a22a a333a a4444a a55555a aba aca';
	$res = preg_replace('#a\d+a#', '!', $str);
	echo $res , PHP_EOL;
	
	/* ------------- №3 ------------- */
	$str = 'aa a1a a22a a333a a4444a a55555a aba aca';
	$res = preg_replace('#a\d*a#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №4 ------------- */
	$str = 'avb a1b a2b a3b a4b a5b abb acb';
	$res = preg_replace('#a\Db#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №5 ------------- */
	$str = 'ave a#b a2b a$b a4b a5b a-b acb';
	$res = preg_replace('#a\Wb#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №6 ------------- */
	$str = 'ave a#a a2a a$a a4a a5a a-a aca';
	$res = preg_replace('#\s#', '!', $str);
	echo $res . PHP_EOL;
	