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
	
	/* ------------- №2 ------------- */
	$str = '1+1=2 2*2=4';
	
	$res = preg_replace('#1\+1#', '!', $str);
	
	echo $res;
	
	/* ------------- №3 ------------- */
	$str = 'a[1] b[2] c[3]';
	
	$res = preg_replace('#\[1]#', '!', $str);
	
	echo $res;
	
	/* ------------- №4 ------------- */
	$str = '50$ 100$ 200$';
	
	$res  = preg_replace('#100\$#', '!', $str);
	
	echo $res;


	
