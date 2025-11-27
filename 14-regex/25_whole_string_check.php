<?php
	/*
	 * Проверка всей строки через регулярки в PHP
	 */

    // ⊗ppPmRgWSCh
	
	/* ------------- №1 ------------- */
	$arr[] = 'site.ru';          // +
	$arr[] = 'site.com';         // +
	$arr[] = 'my-site.com';      // +
	$arr[] = 'my-cool-site.com'; // +
	$arr[] = 'my_site.com';      // +
	$arr[] = 'site123.com';      // +
	$arr[] = 'site.travel';      // +
	$arr[] = 'si$te.com';        // -
	$arr[] = 'site.r';           // -

	$reg = '#^[a-zA-Z0-9_-]+\.[a-zA-Z]{2,6}$#';
	
	foreach ($arr as $item) {
		echo $item . ' - ' . preg_match($reg, $item) . PHP_EOL;
	}
	
	// site.ru - 1
	// site.com - 1
	// my-site.com - 1
	// my-cool-site.com - 1
	// my_site.com - 1
	// site123.com - 1
	// site.travel - 1
	// si$te.com - 0
	// site.r - 0
	
	/* ------------- №2 ------------- */
	$arr[] = 'addr@mail.ru';    // +
	$arr[] = 'addr123@mail.ru'; // +
	$arr[] = 'my-addr@mail.ru'; // +
	$arr[] = 'my_addr@mail.ru'; // +
	$arr[] = 'addr@site.ru';    // +
	$arr[] = 'addr.ru';         // -
	$arr[] = 'addr@.ru';        // -
	$arr[] = 'my@addr@mail.ru'; // -

	$reg = '#^[a-zA-Z0-9_-]+@[a-z]+\.[a-z]{2,6}$#';
	
	foreach ($arr as $item) {
		echo $item . ' - ' . preg_match($reg, $item) . PHP_EOL;
	}
	
	//	addr@mail.ru - 1
	//	addr123@mail.ru - 1
	//	my-addr@mail.ru - 1
	//	my_addr@mail.ru - 1
	//	addr@site.ru - 1
	//	addr.ru - 0
	//	addr@.ru - 0
	//	my@addr@mail.ru - 0
