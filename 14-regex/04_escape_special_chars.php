<?php
	/*
	 * Экранировка спецсимволов в регулярках PHP
	 */

	// ⊗ppPmRgESCh
	
	/* ------------- №1 ------------- */
	$str = 'a+x ax aax aaax';
	
	$res = preg_replace('#a+x#', '!', $str);
	
	echo $res; // a+x ! ! !

	$res = preg_replace('#a\+x#', '!', $str);
	
	echo $res; // ! ax aax aaax
	
	$str = 'a.x abx azx';
	
	$res = preg_replace('#a\.x#', '!', $str);
	
	echo $res; // ! abx azx



	
