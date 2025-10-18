<?php
	/*
	 * Функции для HTML тегов в PHP
	 */

	// ⊗ppPmSFTg

	// №1
	$str = 'aaa <b>bbb</b> ccc';
	echo strip_tags($str) . PHP_EOL;
	
	// №2
	$str = '
		<p>aaa</p>
		<b>bbb</b>
		<s>ccc</s>
		<i>ddd</i>
	';
	echo strip_tags($str, '<b><i>') . PHP_EOL;
	
	// №3
	$str = 'aaa <b>bbb</b> <i>ccc</i>';
	echo htmlspecialchars($str);
	
