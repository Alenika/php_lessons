<?php
	/*
	 * Проверка строк в PHP
	 */

	// ⊗ppPmSFCh

	// №1
	$str = 'document.pdf';
	
	$res = str_ends_with($str, '.pdf');
	
	var_dump($res); // bool(true)
	echo PHP_EOL;

	// №2
	$str = 'https://example.com';
	
	$res2 = str_starts_with($str, 'https://');
	
	var_dump($res2); // bool(true)
	echo PHP_EOL;
	
	// №3
	$str = 'The quick brown fox';
	
	$res3 = str_contains($str, 'fox');
	
	var_dump($res3); // bool(true)
	echo PHP_EOL;
	
	// №4
	$str = 'image.png';
	
	$res4_1 = str_ends_with($str, '.png');
	$res4_2 = str_ends_with($str,'.jpg');
	
	if ($res4_1 OR $res4_2) {
		echo '+++' . PHP_EOL; // +++
		} else {
		echo '---' . PHP_EOL;
	}
	
	// №5
	$str = 'admin@example.com';
	
	$res5_1 = str_contains($str, '@');
	$res5_2 = str_ends_with($str, '.com');
	
	if ($res5_1 AND $res5_2) {
		echo '+++' . PHP_EOL; // +++
	} else {
		echo '---' . PHP_EOL;
	}