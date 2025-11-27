<?php
	/*
	 * Поиск всех совпадений через регулярки на PHP
	 */

	// ⊗ppPmRgAM
	
	/* ------------- №1 ------------- */
	$str = 'a 1 aa 22 aaa 333 bbb 4444';
	
	$res = preg_match_all('#\d+#', $str);
	
	echo $res . PHP_EOL; // 4