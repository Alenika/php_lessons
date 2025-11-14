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
	
	/* ------------- №5 ------------- */
	$str_5 = 'a.b a_b a-b a$b';
	$res_5 = preg_replace('#a.b#', '!', $str_5);
	echo $res_5 . PHP_EOL;
	
	/* ------------- №6 ------------- */
	$str_6 = 'ax x xa xaa xaaa';
	$res_6 = preg_replace('#xa+#', '!', $str_6);
	echo $res_6 . PHP_EOL;
	
	/* ------------- №7 ------------- */
	$str_7 = 'ax x xa xaa xaaa';
	$res_7 = preg_replace('#xa*#', '!', $str_7);
	echo $res_7 . PHP_EOL;
	
	/* ------------- №8 ------------- */
	$str_8 = 'x xax xaax xaaax xbx';
	$res_8 = preg_replace('#xa?x#', '!', $str_8);
	echo $res_8 . PHP_EOL;
	