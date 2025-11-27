<?php
	/*
	 * Автоматическое тестирование регулярок в PHP
	 */

	// ⊗ppPmRgAT
	
	/* ------------- №1 ------------- */
	$reg = '#\d+\.\d+#';
	
	$arr[] = 'aaa 1.23 bbb';
	$arr[] = 'aaa .23 bbb';
	$arr[] = 'aaa 12345 bbb';
	$arr[] = 'aaa 123. bbb';
	$arr[] = 'aaa 12x. bbb';
	
	foreach ($arr as $item) {
		echo $item . ' - ' . preg_match($reg, $item) . PHP_EOL;
	}
	
	//	aaa 1.23 bbb - 1
	//	aaa .23 bbb - 0
	//	aaa 12345 bbb - 0
	//	aaa 123. bbb - 0
	//	aaa 12x. bbb - 0
	
	