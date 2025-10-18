<?php
	/*
	 * Подсчет подстрок в PHP
	 */

	// ⊗ppPmSFCn

	// №1
	$str = 'aaa bbb ccc';
	echo str_word_count($str) . PHP_EOL;
	
	// №2
	$str = 'hello hello world hello';
	echo substr_count($str, 'hello') . PHP_EOL;
	
	// №3
	$str = 'привет привет мир';
	echo mb_substr_count($str, 'привет') . PHP_EOL;
	
	// №4
	$str = 'abracadabra';
	$arr = count_chars($str, 1);
	foreach ($arr as $key => $elem) {
		echo chr($key) . ' ' . $elem . PHP_EOL;
	}
	
	// №5
	$str = 'The quick brown fox jumps over the lazy dog';
	$arr = str_word_count($str, 1);
	$count = 0;
	foreach ($arr as $elem) {
		if (strlen($elem) > 3) {
			$count++;
		}
	}
	echo $count . PHP_EOL;
	