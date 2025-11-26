<?php
	/*
	 * Начало и конец строки в регулярках PHP
	 */
	
	// ⊗ppPmRgLB
	
	/* ------------- №1 ------------- */
	$str = 'abc def xyz';
	$res = preg_replace('#^abc#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$res = preg_replace('#xyz$#', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №3 ------------- */
	$str = '$aaa$ $bbb$ $ccc$';
	$res = preg_replace('#\$ccc\$$#', '!', $str);
	echo $res . PHP_EOL;