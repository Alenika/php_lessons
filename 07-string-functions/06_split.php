<?php
	/*
	 * Разбиение строк в PHP
	 */

	// ⊗ppPmSFSp

	// №1
	
	$str = 'aaa bbb ccc';
	$arr = explode(' ', $str);
	var_dump($arr);
	
	// №2
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$str = implode(',', $arr);
	echo $str;
	
	// №3
	$str = '1234567890'; // №3-№5
	$arr = str_split($str, 2);
	var_dump($arr);
	
	// №4
	$arr = str_split($str, 1);
	var_dump($arr);
	
	// №5
	echo implode('-', str_split($str, 2));
	
	// №6
	$date = '2025-10-17';
	$date1 = explode('-', $date);
	echo implode('.', [$date1[2], $date1[1], $date1[0]]);
	
	// №7
	$str = 'слово1※слово2※слово3※слово4';
	$arr = mb_split('※', $str);
	print_r($arr);
	
	// №8
	$str = 'программирование';
	$arr = mb_str_split($str);
	print_r($arr);
	
	// №9
	$str = 'кириллица';
	$arr = mb_str_split($str, 2);
	print_r($arr);
	