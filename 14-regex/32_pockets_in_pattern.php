<?php
	/*
	 * Карманы в регулярном выражении в PHP
	 */

	// ⊗ppPmRgEP
	
	/* ------------- №1 ------------- */
	$str = 'aaa bbb ccc xyz';
	$reg = '#([a-z])\1\1#';
	preg_match_all($reg, $str, $res);
	var_dump($res[0]);
	
	/* ------------- №2 ------------- */
	$str = 'a aa aaa abab bbbb';
	$reg = '#([a-z])\1+#';
	preg_match_all($reg, $str, $res);
	var_dump($res[0]);
	
	/* ------------- №3 ------------- */
	$str = 'aaa aaa bbb bbb ccc ddd';
	$reg = '#([a-z]+)\s+\1#';
	preg_match_all($reg, $str, $res);
	var_dump($res[0]);