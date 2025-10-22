<?php
	/*
	 * Сортировка массивов в PHP
	 */

	// ⊗ppPmAFSt
	
	/* ------------- №1 ------------- */
	$arr = ['3'=>'a', '2'=>'d', '1'=>'c', '5'=>'e', '4'=>'b'];
	sort($arr);
	var_dump($arr);
	
	/* ------------- №2 ------------- */
	$arr = [10, 2, 35, 4, 15];
	rsort($arr);
	var_dump($arr);
	
	/* ------------- №3 ------------- */
	$arr = ['z'=>'a', 'y'=>'d', 'x'=>'c', 'w'=>'b'];
	ksort($arr);
	var_dump($arr);
	
	/* ------------- №4 ------------- */
	$arr = ['a'=>1, 'c'=>3, 'b'=>2, 'e'=>5, 'd'=>4];
	ksort($arr);
	var_dump($arr);
	
	/* ------------- №5 ------------- */
	$arr = ['a'=>5, 'b'=>2, 'c'=>4, 'd'=>1, 'e'=>3];
	asort($arr);
	var_dump($arr);
	
	/* ------------- №6 ------------- */
	$arr = ['a'=>10, 'b'=>40, 'c'=>20, 'd'=>30];
	arsort($arr);
	var_dump($arr);
	
	/* ------------- №7 ------------- */
	$arr = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
	natsort($arr);
	var_dump($arr);
	
	/* ------------- №8 ------------- */
	$arr = ['IMG12.png', 'img10.png', 'img2.png', 'IMG1.png'];
	natcasesort($arr);
	var_dump($arr);