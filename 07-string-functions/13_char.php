<?php
	/*
	 * Коды символов в PHP
	 */
	
	// ⊗ppPmSFCC

    // №1
	echo ord('a') . ' ';
	echo ord('b') . ' ';
	echo ord('c') . ' ';
	echo ord(' ') . PHP_EOL;
	
	// №2
	echo ord('A') . ' - ' . ord('Z') . PHP_EOL;
	echo ord('a') . ' - ' . ord('z') . PHP_EOL;
	
	// №3
	echo chr(33) . PHP_EOL;
	
	// №4
	$str = '78';
	$str = chr($str);
	echo $str . PHP_EOL;
	
	// №5 что значит случайная строка, rand не проходили
	$len = 2;
	$str = ' ';
	
	
	echo $str . PHP_EOL;
	
	// №6
	$letter = 'G';
	$code = ord($letter);
	if ($code >= 65 and $code <= 90) {
		echo 'Большая буква';
	} else {
		echo 'Маленькая буква';
	}

	
	
	