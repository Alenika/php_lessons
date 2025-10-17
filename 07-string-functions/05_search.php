<?php
	/*
	 * Поиск по строкам в PHP
	 */

	// ⊗ppPmSFSch

	// №1
	$str = 'abc abc abc';
	
	echo strpos($str, 'b') . PHP_EOL; // 1
	
	// №2
	echo strrpos($str, 'b') . PHP_EOL; // 9
	
	// №3
	echo strpos($str, 'b', 3) . PHP_EOL; // 5
	
	// №4
	$str = 'aaa aaa aaa aaa aaa';
	
	$first = strpos($str, ' '); // 3
	$second = strpos($str, ' ', $first + 1);
	echo $second . PHP_EOL; // 7
	
	// №5
	$str = 'example..com';
	
	if (strpos($str, '..') !== false) {
		echo '+++' . PHP_EOL; // +++
	} else {
		echo '---' . PHP_EOL;
	}
	
	// №6
	$str = 'http://example.com';
	
	if (strpos($str, 'http://') === 0) { // 0 это индекс найденной подстроки
		echo '+++'; // +++
	} else {
		echo '---';
	}
