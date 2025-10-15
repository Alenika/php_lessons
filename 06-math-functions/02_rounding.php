<?php
	/*
	 * Функции округления в PHP
	 */

	// ⊗ppPmMFRd

	// №1

	$num = 379;
	$root = sqrt($num);
	$round1 = round($root);
	$round2 = round($root, 1);
	$round3 = round($root, 2);
	
	echo $round1 . ' - ' . $round2 . ' - ' . $round3; // 19 - 19.5 - 19.47
	

	// №2

	$num = 587;
	$root = sqrt($num);
	
	$res = [
		'floor' => floor($root),
		'ceil' => ceil($root),
	];
	
	echo '<pre>';
	var_dump($res);
	echo '<pre>';