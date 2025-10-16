<?php
	/*
	 * Длина строки в PHP
	 */

	// ⊗ppPmSFLn

    // №1
	
	$str = 'abcde';
	
	echo strlen($str) . '<br>';
	
	// №2
	
	$str = 'привет';
	
	echo mb_strlen($str) . '<br>';
	
	// №3

	$password = 'пароль';
	
	if (mb_strlen($password) > 5 and mb_strlen($password) < 10) {
		echo 'Пароль подходит';
	} else {
		echo 'Придумай другой пароль';
	}