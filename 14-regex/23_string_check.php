<?php
	/*
	 * Проверка строки с помощью регулярки на PHP
	 */
	
	// ⊗ppPmRgSCh
	
	/* ------------- №1 ------------- */
	$str = '1 12 123 123 123';
	$res = preg_match('#\d{3}#', $str);
	echo $res . PHP_EOL; // 1
	
	/* ------------- №2 ------------- */
	$str = 'https://site.com';
	$res = preg_match('#^http#', $str);
	echo $res . PHP_EOL; // 1
	
	/* ------------- №3 ------------- */
	$res = preg_match('#^http|https#', $str);
	echo $res . PHP_EOL; // 1
	
	/* ------------- №4 ------------- */
	$str = 'document.html';
	$res = preg_match('#(txt|html|php)$#', $str);
	echo $res . PHP_EOL; // 1
	
	/* ------------- №5 ------------- */
	$str = 'photo.jpeg';
	$res = preg_match('#(jpg|jpeg)$#', $str);
	echo $res . PHP_EOL; // 1
	
	$str = 'photo.png';
	$res = preg_match('#(jpg|jpeg)$#', $str);
	echo $res . PHP_EOL; // 0
