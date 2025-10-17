<?php
	/*
	 * Вырезание строк в PHP
	 */

	// ⊗ppPmSFCt

	// №1
	
	$str = 'html css php';
	
	echo substr($str, 0, 4) . '<br>';
	echo substr($str, 5, 3) . '<br>';
	echo substr($str, 9, 3) . '<br>';
	
	// №2
	
	$str = 'abcdefgh';
	
	echo substr($str, 5, 3) . '<br>';
	
	// №3
	
	$str = 'http://example.com';
	
	if (substr($str, 0, 7) === 'http://') {
		echo '+++';
	} else {
		echo '---';
	}
	
	// №4
	
	$str = 'https://example.com';
	
	if (substr($str, 0, 7) === 'http://' OR substr($str, 0, 8) === 'https://') {
		echo '+++';
	} else {
		echo '---';
	}
	
	// №5
	
	$str = 'image.png';
	
	if (substr($str, 5, 4) === '.png') {
		echo '+++';
	} else {
		echo '---';
	}
	
	// №6
	
	$str = 'photo.jpg';
	
	if (substr($str,  5, 4) === '.png' OR substr($str, 5, 4) === '.jpg') {
		echo '+++' . '<br>';
	} else {
		echo '---' . '<br>';
	}
	
	// №7
	
	$str = 'This is a long string';
	
	if (strlen($str) > 5) {
		echo substr($str, 0, 5) . '...<br>';
	} else {
		echo substr($str) . '<br>';
	}
	
	// №8
	
	$str = 'многобайтовые строки требуют особого подхода';
	
	echo mb_substr($str, 37, 7, 'UTF-8'); // подхода

	// №9
	
	$str = 'пример работы с кириллическими символами';
	
	echo mb_substr($str, 7, 6, 'UTF-8'); // работы
	
	echo PHP_EOL;
	
	echo mb_substr($str, 16, 14, 'UTF-8'); // кириллическими